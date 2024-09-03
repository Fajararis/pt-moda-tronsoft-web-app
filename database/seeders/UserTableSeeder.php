<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'username' => 'Admin',
                'email' => 'modatronsoftperkasa@gmail.com',
                'no_handphone' => '087785668394',
                'password' => bcrypt('admin_admin')
            ]
        );
    }
}
