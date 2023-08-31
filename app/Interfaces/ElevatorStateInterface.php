<?php

namespace App\Interfaces;

interface ElevatorStateInterface {
    public function move();
    public function stop();
}