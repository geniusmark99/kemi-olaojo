<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Course;
use App\Models\CBTQuestion;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CBTQuestion>
 */
class CBTQuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = CBTQuestion::class;

    public function definition(): array
    {

        return [
            'course_code' => $this->faker->randomElement(['OBST', 'OBS2']),
            'question' => $this->faker->randomElement([
                'Which of the following best describes the principle of ultrasound imaging?',
                'What is the primary principle behind ultrasound imaging?',
                'What is the typical frequency range of ultrasound waves used in medical imaging?',
                'What type of ultrasound is commonly used to visualize blood flow?',
                'Which of the following organs is best evaluated using ultrasound?'
            ]),
            'option_a' => $this->faker->randomElement([
                "To determine the baby's gender mark okechukwu",
                'Electromagnetic waves',
                '1 Hz – 100 Hz',
                'A-mode ultrasound',
                'Brain'
            ]),
            'option_a_image' => $this->faker->randomElement([
                'https://res.cloudinary.com/dxjl0dzmx/image/upload/v1738055216/omxxgsh8h7fybnbhyz7j.jpg',
                'https://res.cloudinary.com/dxjl0dzmx/image/upload/v1738074981/o57lnnrike04kwktrchx.jpg',
                null
            ]),
            'option_b' => $this->faker->randomElement([
                'To estimate the gestational age',
                'Sound wave reflection',
                '20 Hz – 20 kHz',
                'B-mode ultrasound',
                'Lungs'
            ]),
            'option_b_image' => $this->faker->randomElement([
                'https://res.cloudinary.com/dxjl0dzmx/image/upload/v1738055223/sxwxchzelvwfrdkqmavw.jpg',
                'https://res.cloudinary.com/dxjl0dzmx/image/upload/v1738074982/ju8ks6doowu5bzj2yv2m.jpg',
                null
            ]),
            'option_c' => $this->faker->randomElement([
                "To measure the mother's blood pressure",
                'Thermal radiation',
                '1 MHz – 15 MHz',
                'Doppler ultrasound',
                'Bones'
            ]),
            'option_c_image' => $this->faker->randomElement([
                'https://res.cloudinary.com/dxjl0dzmx/image/upload/v1738055230/n3yjvymmvwo6et0uk9hn.jpg',
                'https://res.cloudinary.com/dxjl0dzmx/image/upload/v1738074984/sne23ad9gy1w4v7zx13d.jpg',
                null
            ]),
            'option_d' => $this->faker->randomElement([
                'To assess fetal movement',
                'Magnetic resonance',
                '100 MHz – 500 MHz',
                'M-mode ultrasound',
                'Liver'
            ]),
            'option_d_image' => $this->faker->randomElement([
                'https://res.cloudinary.com/dxjl0dzmx/image/upload/v1738055237/bgb0rjntdb6uuom2aqjg.jpg',
                'https://res.cloudinary.com/dxjl0dzmx/image/upload/v1738074986/rc26wu8orsb2hdmwkrak.jpg',
                null
            ]),
            'correct_answer' => $this->faker->randomElement(['A', 'B', 'C', 'D']),
            'question_image' => $this->faker->randomElement([
                'https://res.cloudinary.com/dxjl0dzmx/image/upload/v1738055210/ufww5mxd3o5jyflrtzat.jpg',
                null
            ]),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
