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
        Schema::create('carbonated_analyses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('syrup_id')->constrained()->onDelete('cascade');
            $table->foreignId('line_id');
            $table->foreignId('container_supplier_id');
            $table->foreignId('format_id');
            $table->foreignId('cap_id');
            $table->foreignId('user_id');
            $table->float('temperature');
            $table->float('pressure');
            $table->float('carbonate');
            $table->float('brix');
            $table->float('inverted_brix')->nullable();
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
        Schema::dropIfExists('carbonated_analyses');
    }
};
