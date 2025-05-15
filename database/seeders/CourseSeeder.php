<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\CbtQuestion;


class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        Course::insert([
            [
                'course_title' => 'Adipisci sed possimus.',
                'course_slug' => 'adipisci-sed-possimus-opGI0M7W',
                'course_code' => 'OBST',
                'course_description' => 'Et officia magni facilis pariatur esse molestiae. Doloremque voluptas nulla consequatur doloremque. Quidem amet et fugiat eligendi blanditiis aut. Eos incidunt vero culpa.',
                'course_video_url' => 'https://res.cloudinary.com/dxjl0dzmx/video/upload/v1737993291/k4078aytn4qfq1mcgqtb.mp4',
                'course_thumbnail_url' => 'https://res.cloudinary.com/dxjl0dzmx/image/upload/v1737993281/smmgpmn6y9iqq95pj0rp.jpg',
                'course_price' => 25.74,
                'created_at' => '2025-01-28 09:09:28',
                'updated_at' => '2025-01-28 09:09:28',
            ],
            [
                'course_title' => 'Fundamentals of Obstetric Ultrasound',
                'course_slug' => 'fundamentals-of-obstetric-ultrasound-tqyrPICi',
                'course_code' => 'OBS2',
                'course_description' => 'Fundamentals of Obstetric Ultrasound',
                'course_video_url' => 'https://res.cloudinary.com/dxjl0dzmx/video/upload/v1738074113/piltw4hucayngksh1yia.mp4',
                'course_thumbnail_url' => 'https://res.cloudinary.com/dxjl0dzmx/image/upload/v1738074105/dagojfadamtsvii1qfih.jpg',
                'course_price' => 100.00,
                'created_at' => '2025-01-28 13:21:54',
                'updated_at' => '2025-01-28 13:21:54',
            ]
        ]);
    }
}
