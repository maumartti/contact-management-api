<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Account;

class AccountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $persons = [
            ['name' => 'Alan Dias', 'email' => 'johnddf@example.com', 'tel' => '242452000', 'image' => 'imageaccount-1', 'address' => 'calle 123 Main St'],
            ['name' => 'Marcos Delta', 'email' => 'alic34e@example.com', 'tel' => '51261111', 'image' => 'imageaccount-2', 'address' => 'Avenida 456 Elm YR'],
            ['name' => 'Bob Kler', 'email' => 'bo34b@example.com', 'tel' => '4567892', 'image' => 'imageaccount-3', 'address' => 'Bulevar 1144 Oak Or'],
            ['name' => 'Sofia Awer', 'email' => 'bob55@example.com', 'tel' => '5557892', 'image' => 'imageaccount-4', 'address' => 'Road street 725 Oak IM'],
            ['name' => 'Pol Melt', 'email' => 'abob67@example.com', 'tel' => '777567892', 'image' => 'imageaccount-5', 'address' => 'Central park 3559 Oak Ny'],
            ['name' => 'Uri Yeler', 'email' => 'ybeob@example.com', 'tel' => '888567892', 'image' => 'imageaccount-6', 'address' => '19 de octubre y Adan Oak Ic'],
            ['name' => 'Camila Castro', 'email' => 'uq3bob@example.com', 'tel' => '999567892', 'image' => 'imageaccount-7', 'address' => 'Avenida de mayo 677789 Oak St'],
            ['name' => 'Hector Acosta', 'email' => 'b343bgob@example.com', 'tel' => '111167892', 'image' => 'imageaccount-8', 'address' => 'calle pública 54389 Oak 7t'],
        ];

        foreach ($persons as $item) {
            Account::create([
                'name' => $item['name'],
                'email' => $item['email'],
                'address' => $item['address'],
                'image' => $item['image'],
                'tel' => $item['tel'],
                'user_id' => 1,
            ]);
        }
    }
}
