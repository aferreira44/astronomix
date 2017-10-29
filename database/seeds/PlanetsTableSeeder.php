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
            'meanRadius' => 6371, // km
            'equatorialRadius' => 6378.1370, // km
            'polarRadius' => 6356.7523, // km
            'equatorialCircumference' => 40075, // km
            'meridionalCircumference' => 40009,
            'mass' => 5.9722 * pow(10, 24), // kg
            'periapsis' => 152.10 * pow(10, 6), // km
            'apoapsis' => 147.10 * pow(10, 6), // km
            'orbitalPeriod' => 1, // years;
            'rotationPeriod' => 0.99726968, // days
            'rings' => false,
            'atmosphere' => 'N2 O2 Ar',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
