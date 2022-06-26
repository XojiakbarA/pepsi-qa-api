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
        Schema::create('non_carbonated_analyses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('syrup_id')->constrained()->onDelete('cascade');
            $table->foreignId('line_id');
            $table->foreignId('container_supplier_id');
            $table->foreignId('format_id');
            $table->foreignId('cap_id');
            $table->foreignId('user_id');
            $table->float('temperature_after_filling');
            $table->float('temperature_before_tilter');
            $table->float('temperature_after_cooling');
            $table->float('pressure_after_filling');
            $table->float('pressure_after_cooling');
            $table->float('brix_after_filling');
            $table->float('brix_after_cooling');
            $table->float('turbidity')->nullable();
            $table->unsignedDouble('density')->nullable();
            $table->float('acidity')->nullable();
            $table->float('ph')->nullable();
            $table->float('fullness')->nullable();
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
        Schema::dropIfExists('non_carbonated_analyses');
    }
};
