<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\UsersToFloor;

class UsersToFloorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [ 'user_id' => 1,  'floor' => 10],
            [ 'user_id' => 1,  'floor' => 11],
            [ 'user_id' => 1,  'floor' => 12],
            [ 'user_id' => 2,  'floor' => 10],
            [ 'user_id' => 2,  'floor' => 13],
        ];

        foreach ($datas as $key => $data) {
            UsersToFloor::create([
                'user_id' => $data['user_id'],
                'floor'   => $data['floor'],
            ]);
        }
    }
}
