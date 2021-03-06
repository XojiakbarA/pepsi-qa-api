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
        Schema::create('shift_modes', function (Blueprint $table) {
            $table->id();
            $table->integer('type');
            $table->json('values');
            $table->json('day')->nullable();
            $table->json('night')->nullable();
            $table->json('sequence');
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
        Schema::dropIfExists('shift_modes');
    }
};
