<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PlanetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('planets')->insert([
            'name' => 'Earth',
            'mean_radius' => 6371, // km
            'equatorial_radius' => 6378.1370, // km
            'polar_radius' => 6356.7523, // km
            'equatorial_circumference' => 40075, // km
            'meridional_circumference' => 40009,
            'mass' => 5.9722 * pow(10, 24), // kg
            'periapsis' => 152.10 * pow(10, 6), // km
            'apoapsis' => 147.10 * pow(10, 6), // km
            'orbital_period' => 1, // years;
            'rotation_period' => 0.99726968, // days
            'rings' => false,
            'atmosphere' => 'N2 O2 Ar',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
