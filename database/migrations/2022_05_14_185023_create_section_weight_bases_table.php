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
        Schema::create('section_weight_bases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('section_weight_analysis_id')->constrained()->onDelete('cascade');
            $table->float('1');
            $table->float('2');
            $table->float('3');
            $table->float('4');
            $table->float('5');
            $table->float('6');
            $table->float('7');
            $table->float('8');
            $table->float('9')->nullable();
            $table->float('10')->nullable();
            $table->float('11')->nullable();
            $table->float('12')->nullable();
            $table->float('13')->nullable();
            $table->float('14')->nullable();
            $table->float('15')->nullable();
            $table->float('16')->nullable();
            $table->float('17')->nullable();
            $table->float('18')->nullable();
            $table->float('19')->nullable();
            $table->float('20')->nullable();
            $table->float('21')->nullable();
            $table->float('22')->nullable();
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
        Schema::dropIfExists('section_weight_bases');
    }
};
