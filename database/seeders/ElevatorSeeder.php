<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Elevator;

class ElevatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [ 'name' => 'A', 'floor' => 5,  'direction' => 'top',    'target' => 9,  ],
            [ 'name' => 'B', 'floor' => -1, 'direction' => 'bottom', 'target' => -4, ],
            [ 'name' => 'C', 'floor' => 14, 'direction' => 'bottom', 'target' => 0,  ],
            [ 'name' => 'D', 'floor' => 1,  'direction' => 'top',    'target' => 5,  ]
        ];

        foreach ($datas as $key => $data) {
            Elevator::create([
                'name'      => $data['name'],
                'floor'     => $data['floor'],
                'direction' => $data['direction'],
                'target'    => $data['target'],
            ]);
        }
    }
}
