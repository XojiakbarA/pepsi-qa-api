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
        Schema::create('inverted_syrups', function (Blueprint $table) {
            $table->id();
            $table->foreignId('syrup_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id');
            $table->float('blend_syrup_brix')->nullable();
            $table->float('drink_brix')->nullable();
            $table->unsignedDouble('blend_density')->nullable();
            $table->unsignedDouble('drink_density')->nullable();
            $table->float('drink_inverted_brix')->nullable();
            $table->float('drink_acidity')->nullable();
            $table->float('drink_ph')->nullable();
            $table->float('target')->nullable();
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
        Schema::dropIfExists('inverted_syrups');
    }
};
