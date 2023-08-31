<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [ 'name' => 'Ahmet',  'email' => 'ahmet@gmail.com',  'password' => '123' ],
            [ 'name' => 'Mehmet', 'email' => 'mehmet@gmail.com', 'password' => '123' ],
        ];

        foreach ($datas as $key => $data) {
            User::create([
                'name'      => $data['name'],
                'email'     => $data['email'],
                'password' => $data['password'],
            ]);
        }
    }
}
