<?php

namespace App\Services;

use App\Models\Elevator;
use Illuminate\Support\Facades\DB;

class ElevatorService
{
    public function getNearestElevator($currentFloor, $targetFloor)
    {
        $target = ($targetFloor > $currentFloor) ? 'DESC' : 'ASC';

        $result = Elevator::
            select('*', DB::raw('ABS(floor - ' . $currentFloor . ') AS floorDifference'))->
            orderBy('floorDifference', 'ASC')->
            orderBy('target', $target)->
            limit(1)->
            first();
        
        return $result;
    }
}