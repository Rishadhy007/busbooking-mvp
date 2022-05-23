<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Rishadhy',
            'email' => 'rishadhy@mail.com',
        ]);

        $this->call(StationSeeder::class);
        $this->call(BusRouteSeeder::class);
        $this->call(BusSeeder::class);

    }
}
