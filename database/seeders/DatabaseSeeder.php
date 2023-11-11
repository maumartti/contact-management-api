<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\AccountTableSeeder;
use Database\Seeders\UserTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserTableSeeder::class);
        $this->call(AccountTableSeeder::class);
    }
}
