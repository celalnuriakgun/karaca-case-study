<?php

namespace App\Http\Controllers;

use App\Http\Requests\ElevatorsStartRequest;
use App\Http\Resources\ElevatorsUpdateResource;
use Illuminate\Http\Request;
use \App\Models\Elevator;
use \App\Services\ElevatorService;

class ElevatorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function updateElevatorsForStart(ElevatorsStartRequest $request)
    {
        $datas = $request->validated();

        foreach ($datas as $key => $data) {
            $direction = ($data['floor'] > $data['target']) ? 'bottom' : 'top';
            
            Elevator::where('name', $key)
            ->update([
                'floor' => $data['floor'],
                'target' => $data['target'],
                'direction' => $direction
            ]);
        }

        return ElevatorsUpdateResource::make($request->validated());
    }

    public function callElevator(Request $request, ElevatorService $elevatorService) {
            
        return $elevatorService->getNearestElevator($request->target, $request->floor);
    }
}
