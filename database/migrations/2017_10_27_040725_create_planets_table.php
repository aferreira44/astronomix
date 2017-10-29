<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planets', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            // $table->enum('compositionType', ['foo', 'bar']);
            // $table->enum('massType', ['foo', 'bar']);
            // $table->enum('orbitalType', ['foo', 'bar']);
            $table->double('mean_radius');
            $table->double('equatorial_radius');
            $table->double('polar_radius');
            $table->double('equatorial_circumference');
            $table->double('meridional_circumference');
            $table->double('mass');
            $table->double('periapsis');
            $table->double('apoapsis');
            $table->float('orbital_period');
            $table->float('rotation_period');
            $table->boolean('rings');
            $table->text('atmosphere');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('planets');
    }
}
