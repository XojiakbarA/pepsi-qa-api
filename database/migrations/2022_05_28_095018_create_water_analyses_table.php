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
        Schema::create('water_analyses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('place');
            $table->float('hardness');
            $table->float('tds');
            $table->float('alkalinity');
            $table->float('conductivity');
            $table->unsignedDouble('turbidity');
            $table->float('temperature');
            $table->float('ph');
            $table->float('cl');
            $table->unsignedDouble('mn');
            $table->float('fe');
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
        Schema::dropIfExists('water_analyses');
    }
};
