<?php

namespace Database\Seeders;

use App\Models\Bus;
use App\Models\BusRoute;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $busRoutes = BusRoute::all();

        foreach ($busRoutes as $busRoute){
            Bus::factory(3)->create([
                'bus_route_id' => $busRoute->id
            ]);

        }
    }
}
