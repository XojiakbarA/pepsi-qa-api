<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('syrups', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tank_id');
            $table->foreignId('product_id');
            $table->foreignId('user_id');
            $table->integer('volume');
            $table->float('sugar_syrup_brix');
            $table->float('blend_syrup_brix');
            $table->float('drink_brix');
            $table->unsignedDouble('blend_density');
            $table->unsignedDouble('drink_density');
            $table->float('drink_inverted_brix');
            $table->float('drink_acidity');
            $table->float('drink_ph');
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
        Schema::dropIfExists('syrups');
    }
};
