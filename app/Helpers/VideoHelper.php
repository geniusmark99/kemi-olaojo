<?php

namespace App\Helpers;

use FFMpeg\FFMpeg;
use FFMpeg\FFProbe;

class VideoHelper
{
    public static function getDuration($filePath)
    {
        $ffmpeg = FFMpeg::create();
        $video = $ffmpeg->open($filePath);
        $ffprobe = FFProbe::create();
        $duration = $ffprobe
            ->format($filePath)
            ->get('duration');

        return gmdate("H:i:s", $duration);
    }
}
