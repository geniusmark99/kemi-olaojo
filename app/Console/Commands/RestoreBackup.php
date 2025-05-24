<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class RestoreBackup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'backup:restore {backupZip?}';
    protected $description = 'Restore the latest or a specific backup (database + files)';

    /**
     * The console command description.
     *
     * @var string
     */

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $zipFile = $this->argument('backupZip');

        $backupDir = storage_path('app/laravel-backups');
        if (!$zipFile) {
            $backups = collect(File::files($backupDir))
                ->filter(fn($file) => $file->getExtension() === 'zip')
                ->sortByDesc(fn($file) => $file->getMTime());

            $latest = $backups->first();
            if (!$latest) {
                $this->error('No backup zip file found.');
                return;
            }
            $zipFile = $latest->getPathname();
        }

        $this->info("Restoring from: {$zipFile}");

        $restorePath = storage_path('app/backup-temp');

        // Clean old temp restore folder
        File::deleteDirectory($restorePath);
        File::makeDirectory($restorePath);


        // Unzip
        $zip = new \ZipArchive();
        if ($zip->open($zipFile) === true) {
            $zip->extractTo($restorePath);
            $zip->close();
            $this->info('Backup extracted.');
        } else {
            $this->error('Failed to unzip backup.');
            return;
        }

        // Restore DB
        $sqlFiles = File::glob($restorePath . '/db-dumps/*.sql');
        if (empty($sqlFiles)) {
            $this->warn('No SQL file found to restore.');
        } else {
            $sql = $sqlFiles[0];
            $db = config('database.connections.mysql.database');
            $user = config('database.connections.mysql.username');
            $pass = config('database.connections.mysql.password');
            $host = config('database.connections.mysql.host');

            $command = "mysql -u \"{$user}\" -p\"{$pass}\" -h \"{$host}\" \"{$db}\" < \"{$sql}\"";
            $this->info("Restoring DB...");
            exec($command, $output, $returnCode);
            if ($returnCode !== 0) {
                $this->error('Database restore failed.');
                return;
            }
            $this->info('Database restored successfully.');
        }


        // Restore files
        $filesPath = $restorePath . '/files/storage/app/public';
        $destinationPath = storage_path('app/public');
        if (File::isDirectory($filesPath)) {
            File::copyDirectory($filesPath, $destinationPath);
            $this->info("✔ Public files restored to: {$destinationPath}");
        } else {
            $this->warn("⚠ No public files found at: {$filesPath}");;
        }

        $this->info('✅ Backup restoration completed!');
    }
}
