<?php

namespace Database\Seeders;

use App\Models\BusRoute;
use App\Models\Station;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusRouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stations = Station::all();
//        dd($stations);

        foreach($stations as $station) {
            $otherStations = $stations->filter(function ($st) use ($station){
                return $st->id !== $station->id;
            });

            foreach ($otherStations as $otherStation){
                BusRoute::create([
                    'from_station' =>$station->id,
                    'to_station' =>$otherStation->id,
                    'price' => 1000

                ]);
            }

//            dump($station->name);
//            dump($station->created_at);
        }
    }
}
