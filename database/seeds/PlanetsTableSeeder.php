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
            'mean_radius_unit' => 1,
            'equatorial_radius' => 6378.1370, // km
            'equatorial_radius_unit' => 1,
            'polar_radius' => 6356.7523, // km
            'polar_radius_unit' => 1,
            'equatorial_circumference' => 40075, // km
            'equatorial_circumference_unit' => 1,
            'meridional_circumference' => 40009,
            'meridional_circumference_unit' => 1,
            'mass' => 5.9722 * pow(10, 24), // kg
            'mass_unit' => 1,
            'periapsis' => 152.10 * pow(10, 6), // km
            'periapsis_unit' => 1,
            'apoapsis' => 147.10 * pow(10, 6), // km
            'apoapsis_unit' => 1,
            'orbital_period' => 1, // years;
            'orbital_period_unit' => 1,
            'rotation_period' => 0.99726968, // days
            'rotation_period_unit' => 1,
            'rings' => false,
            'atmosphere' => 'N2 O2 Ar',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
