<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();

            $table->double('temp_max')->default(-1);
            $table->double('hum_max')->default(-1);
            $table->double('aci_max')->default(-1);

            $table->double('light_max')->default(-1);
            $table->double('dist_max')->default(-1);

            $table->integer('arrosage_auto')->default(-1);
            $table->integer('flag_arrosage')->default(-1);
            $table->integer('eclairage_auto')->default(-1);
            $table->integer('flag_eclairage')->default(-1);

            $table->integer('security_auto')->default(-1);
            $table->integer('security_flag')->default(-1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
