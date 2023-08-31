<?php

use App\Http\Controllers\ElevatorController;
use App\Http\Requests\ElevatorRequest;
use App\Http\Resources\ElevatorsUpdateResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Models\Elevator;
use \App\Models\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/elevators', function (Request $request) {
    return Elevator::all();
});

Route::get('/users', function (Request $request) {
    return User::with('floor')->get();
});

Route::get('/elevators/{floor}/{target}', [ElevatorController::class, 'callElevator']);

Route::get('/elevators-start', function (Request $request) {
    $elevators = Elevator::all();

    foreach ($elevators as $key => $elevator) {
        if ($elevator->floor != $elevator->target) {
            if ($elevator->direction == 'top') {
                $elevator->floor++;
            } else {
                $elevator->floor--;
            }

            $elevator->update();
        } else {
            $elevator->direction = null;
            $elevator->update();
        }
    }
});

Route::post('/elevators-update', [ElevatorController::class, 'updateElevatorsForStart']);

Route::get('/stop', function (Request $request) {
    Artisan::call('schedule:interrupt');

    return response()->json(['status' => true]);
});