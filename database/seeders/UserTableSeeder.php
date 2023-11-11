<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $persons = [
            ['name' => 'admin', 'email' => 'admin@gmail.com', 'password' => '11111111'],
            ['name' => 'user2', 'email' => 'user2@gmail.com', 'password' => '22222222'],
            ['name' => 'user3', 'email' => 'user3@gmail.com', 'password' => '33333333'],
        ];

        foreach ($persons as $item) {
            User::create([
                'name' => $item['name'],
                'email' => $item['email'],
                'password' => bcrypt($item['password']),
            ]);
        }
    }
}
