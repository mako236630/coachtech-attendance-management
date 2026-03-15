<?php

namespace Database\Seeders;

use App\Models\Attendance;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Rest;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // is_adminは管理者(1)一般ユーザー(0)の設定です

        // 管理者用ユーザー
        $admin_user = User::create([
            "name" => "管理者",
            "email" => "admin@example.com",
            "password" => Hash::make("adminpass"),
            "is_admin" => 1,
        ]);

        $user = User::create([
            'name' => 'テスト用ユーザー',
            'email' => 'test@example.com',
            'password' => Hash::make('password'),
            'is_admin' => 0,
            'email_verified_at' => now(),
        ]);

        $user1 = User::create([
            'name' =>'西玲奈',
            'email' => 'reina.n@coachtech.com',
            'password' => Hash::make('password1'),
            'is_admin' => 0,
            'email_verified_at' => now(),
        ]);

        $user2 = User::create([
            'name' => '山田太郎',
            'email' => 'taro.y@coachtech.com',
            'password' => Hash::make('password2'),
            'is_admin' => 0,
            'email_verified_at' => now(),
        ]);

        $user3 = User::create([
            'name' => '増田一世',
            'email' => 'issei.m@coachtech.com',
            'password' => Hash::make('password3'),
            'is_admin' => 0,
            'email_verified_at' => now(),
        ]);

        $user4 = User::create([
            'name' => '山本敬吉',
            'email' => 'keikichi.y@coachtech',
            'password' => Hash::make('password4'),
            'is_admin' => 0,
            'email_verified_at' => now(),
        ]);

        $user5 = User::create([
            'name' => '秋田朋美',
            'email' => 'tomomi.a@coachtech',
            'password' => Hash::make('password5'),
            'is_admin' => 0,
            'email_verified_at' => now(),
        ]);

        $user6 = User::create([
            'name' => '中西教夫',
            'email' => 'norio.n@coachtech',
            'password' => Hash::make('password6'),
            'is_admin' => 0,
            'email_verified_at' => now(),
        ]);
    }
}
