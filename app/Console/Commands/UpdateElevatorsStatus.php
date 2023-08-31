<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use \App\Models\Elevator;

class UpdateElevatorsStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'elevators:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Asansörlerin her saniye durumunu günceller.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
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
    }
}
