<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CBTQuestion;

class CBTQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // CBTQuestion::factory()->count(1)->create();

        /*

  Question:  'What is the primary principle behind ultrasound imaging?',
                'What is the typical frequency range of ultrasound waves used in medical imaging?',
                '',
                'Which of the following organs is best evaluated using ultrasound?'


                option_a: 

                'Electromagnetic waves',
                '1 Hz – 100 Hz',
                'A-mode ultrasound',
                'Brain'


            option_a_image    'https://res.cloudinary.com/dxjl0dzmx/image/upload/v1738074981/o57lnnrike04kwktrchx.jpg',

            option_b:  '20 Hz – 20 kHz',
                'B-mode ultrasound',
                'Lungs'


             option_b_image :      'https://res.cloudinary.com/dxjl0dzmx/image/upload/v1738074982/ju8ks6doowu5bzj2yv2m.jpg',


             opiton_c:  'Thermal radiation',
                '1 MHz – 15 MHz',
                'Doppler ultrasound',
                'Bones'

                option_c_image: 
                'https://res.cloudinary.com/dxjl0dzmx/image/upload/v1738074984/sne23ad9gy1w4v7zx13d.jpg',


               option_d:   'Magnetic resonance',
                '100 MHz – 500 MHz',
                'M-mode ultrasound',
                'Liver'

                option_d_image:
                'https://res.cloudinary.com/dxjl0dzmx/image/upload/v1738074986/rc26wu8orsb2hdmwkrak.jpg',
                 


*/
        CBTQuestion::insert([
            [
                'course_code' => 'OBST',
                'question' =>  'Which of the following best describes the principle of ultrasound imaging?',
                'option_a' => "To determine the baby's gender mark okechukwu",
                'option_a_image' => 'https://res.cloudinary.com/dxjl0dzmx/image/upload/v1738055216/omxxgsh8h7fybnbhyz7j.jpg',
                'option_b' => 'To estimate the gestational age',
                'option_b_image' => 'https://res.cloudinary.com/dxjl0dzmx/image/upload/v1738055223/sxwxchzelvwfrdkqmavw.jpg',
                'option_c' =>  "To measure the mother's blood pressure",
                'option_c_image' => 'https://res.cloudinary.com/dxjl0dzmx/image/upload/v1738055230/n3yjvymmvwo6et0uk9hn.jpg',
                'option_d' => 'To assess fetal movement',
                'option_d_image' => 'https://res.cloudinary.com/dxjl0dzmx/image/upload/v1738055237/bgb0rjntdb6uuom2aqjg.jpg',
                'correct_answer' => 'A',
                'question_image' => 'https://res.cloudinary.com/dxjl0dzmx/image/upload/v1738055210/ufww5mxd3o5jyflrtzat.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'course_code' => 'OBS2',
                'question' =>  'What type of ultrasound is commonly used to visualize blood flow?',
                'option_a' => "To determine the baby's gender mark okechukwu",
                'option_a_image' => null,
                'option_b' => 'To estimate the gestational age',
                'option_b_image' => null,
                'option_c' =>  "To measure the mother's blood pressure",
                'option_c_image' => null,
                'option_d' => 'To assess fetal movement',
                'option_d_image' => null,
                'correct_answer' => 'A',
                'question_image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'course_code' => 'OBST',
                'question' =>  'Which of the following best describes the principle of ultrasound imaging?',
                'option_a' => "To determine the baby's gender mark okechukwu",
                'option_a_image' => 'https://res.cloudinary.com/dxjl0dzmx/image/upload/v1738055216/omxxgsh8h7fybnbhyz7j.jpg',
                'option_b' => 'To estimate the gestational age',
                'option_b_image' => 'https://res.cloudinary.com/dxjl0dzmx/image/upload/v1738055223/sxwxchzelvwfrdkqmavw.jpg',
                'option_c' =>  "To measure the mother's blood pressure",
                'option_c_image' => 'https://res.cloudinary.com/dxjl0dzmx/image/upload/v1738055230/n3yjvymmvwo6et0uk9hn.jpg',
                'option_d' => 'To assess fetal movement',
                'option_d_image' => 'https://res.cloudinary.com/dxjl0dzmx/image/upload/v1738055237/bgb0rjntdb6uuom2aqjg.jpg',
                'correct_answer' => 'A',
                'question_image' => 'https://res.cloudinary.com/dxjl0dzmx/image/upload/v1738055210/ufww5mxd3o5jyflrtzat.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],


        ]);
    }
}
