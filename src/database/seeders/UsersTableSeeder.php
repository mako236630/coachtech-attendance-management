<?php

namespace Database\Seeders;

use App\Models\Attendance;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Rest;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 管理者用ユーザー
        $admin_user = User::create([
            "name" => "管理者",
            "email" => "admin@example.com",
            "password" => Hash::make("adminpass"),
            "is_admin" => 1,
        ]);

        $users = User::factory(6)->create();

        foreach ($users as $user) {
            $attendances = Attendance::factory(90)->create(['user_id' => $user->id]);

            foreach ($attendances as $attendance) {
                Rest::factory()->create([
                    'attendance_id' => $attendance->id,
                    'rest_in_at' => (clone $attendance->punched_in_at)->modify('+4 hours'),
                    'rest_out_at' => (clone $attendance->punched_in_at)->modify('+5 hours'),
                ]);
            }
        }
    }
}
