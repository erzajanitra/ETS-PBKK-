<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RecordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2,8)),
            'suhu' => $this->faker->randomFloat(1,34,40),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
            'body' => $this->faker->paragraph(mt_rand(5,10)),
            'pasien_id' => mt_rand(1,2),
            'dokter_id' => mt_rand(1,2),
        ];
    }
}
