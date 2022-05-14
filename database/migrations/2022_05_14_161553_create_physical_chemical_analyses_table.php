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
        Schema::create('physical_chemical_analyses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_analysis_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id');
            $table->float('temperature');
            $table->float('pressure');
            $table->float('carbonate');
            $table->float('brix');
            $table->float('inverted_brix')->nullable();
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
        Schema::dropIfExists('physical_chemical_analyses');
    }
};
