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
            $table->integer('mean_radius_unit')->unsigned();
            $table->foreign('mean_radius_unit')->references('id')->on('units');

            $table->double('equatorial_radius');
            $table->integer('equatorial_radius_unit')->unsigned();
            $table->foreign('equatorial_radius_unit')->references('id')->on('units');

            $table->double('polar_radius');
            $table->integer('polar_radius_unit')->unsigned();
            $table->foreign('polar_radius_unit')->references('id')->on('units');

            $table->double('equatorial_circumference');
            $table->integer('equatorial_circumference_unit')->unsigned();
            $table->foreign('equatorial_circumference_unit')->references('id')->on('units');

            $table->double('meridional_circumference');
            $table->integer('meridional_circumference_unit')->unsigned();
            $table->foreign('meridional_circumference_unit')->references('id')->on('units');

            $table->double('mass');
            $table->integer('mass_unit')->unsigned();
            $table->foreign('mass_unit')->references('id')->on('units');

            $table->double('periapsis');
            $table->integer('periapsis_unit')->unsigned();
            $table->foreign('periapsis_unit')->references('id')->on('units');

            $table->double('apoapsis');
            $table->integer('apoapsis_unit')->unsigned();
            $table->foreign('apoapsis_unit')->references('id')->on('units');

            $table->float('orbital_period');
            $table->integer('orbital_period_unit')->unsigned();
            $table->foreign('orbital_period_unit')->references('id')->on('units');

            $table->float('rotation_period');
            $table->integer('rotation_period_unit')->unsigned();
            $table->foreign('rotation_period_unit')->references('id')->on('units');

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
