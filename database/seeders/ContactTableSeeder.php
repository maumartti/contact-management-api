<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $persons = [
            ['name' => 'Alan Dias', 'email' => 'john9ddf@example.com', 'tel' => '242452000', 'image' => 'https://i.postimg.cc/FRjtW1Zy/imageaccount-1.jpg', 'address' => 'calle 123 Main St'],
            ['name' => 'Marcos Delta', 'email' => 'ali8c34e@example.com', 'tel' => '51261111', 'image' => 'https://i.postimg.cc/T1GzZG7Z/imageaccount-2.jpg', 'address' => 'Avenida 456 Elm YR'],
            ['name' => 'Bob Kler', 'email' => 'bo34yb@example.com', 'tel' => '4567892', 'image' => 'https://i.postimg.cc/GtQWRN69/imageaccount-3.jpg', 'address' => 'Bulevar 1144 Oak Or'],
            ['name' => 'Sofia Awer', 'email' => 'bogb55@example.com', 'tel' => '5557892', 'image' => 'https://i.postimg.cc/L43KjYhR/imageaccount-4.jpg', 'address' => 'Road street 725 Oak IM'],
            ['name' => 'Carla Melt', 'email' => 'abnob67@example.com', 'tel' => '777567892', 'image' => 'https://i.postimg.cc/6pTksMc5/imageaccount-5.jpg', 'address' => 'Central park 3559 Oak Ny'],
            ['name' => 'Uri Yeler', 'email' => 'ybemob@example.com', 'tel' => '888567892', 'image' => 'https://i.postimg.cc/zXxsPsnc/imageaccount-6.jpg', 'address' => '19 de octubre y Adan Oak Ic'],
            ['name' => 'Camila Castro', 'email' => 'uqn3bob@example.com', 'tel' => '999567892', 'image' => 'https://i.postimg.cc/g25fG3ty/imageaccount-7.png', 'address' => 'Avenida de mayo 677789 Oak St'],
            ['name' => 'Hector Acosta', 'email' => 'b343obgob@example.com', 'tel' => '111167892', 'image' => 'https://i.postimg.cc/kXMrsJtS/imageaccount-8.jpg', 'address' => 'calle pública 54389 Oak 7t'],
        ];

        foreach ($persons as $item) {
            Contact::create([
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
