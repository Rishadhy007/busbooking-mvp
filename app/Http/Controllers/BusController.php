<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use Illuminate\Http\Request;

class BusController extends Controller
{
    public function createBus()
    {
        $bus = new Bus();
        $bus->name = 'ásjaksj';

        $bus->save();

        Bus::create([
            'name' => 'áaa',
            'number' => ''
        ]);
    }
}
