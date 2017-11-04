<?php

use Illuminate\Database\Seeder;

class UnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $units = [
            [
                'name' => 'Kilometre',
                'unit_system' => 'metric',
                'type' => 'length',
                'symbol' => 'km'
            ],
            [
                'name' => 'Kilogram',
                'unit_system' => 'metric',
                'type' => 'weigth',
                'symbol' => 'kg'
            ],
            [
                'name' => 'Day',
                'unit_system' => 'astronomical',
                'type' => 'time',
                'symbol' => 'd'
            ],
            [
                'name' => 'Year',
                'unit_system' => 'astronomical',
                'type' => 'time',
                'symbol' => 'yr'
            ]
        ];

        DB::table('units')->insert($units);
    }
}
