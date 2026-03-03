<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class AttendanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $punchIn = $this->faker->dateTimeBetween('-90 days', 'now');
        $dateStr = $punchIn->format('Y-m-d');

        return [
            'user_id' => User::factory(),
            'punched_in_at' => $dateStr . ' 09:00:00',
            'punched_out_at' => $dateStr . ' 18:00:00',
            'status' => 0,
        ];
    }
}
