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
        Schema::create('removal_torque_angles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('removal_torque_analysis_id')->constrained()->onDelete('cascade');
            $table->integer('1');
            $table->integer('2');
            $table->integer('3');
            $table->integer('4');
            $table->integer('5');
            $table->integer('6');
            $table->integer('7');
            $table->integer('8');
            $table->integer('9');
            $table->integer('10');
            $table->integer('11')->nullable();
            $table->integer('12')->nullable();
            $table->integer('13')->nullable();
            $table->integer('14')->nullable();
            $table->integer('15')->nullable();
            $table->integer('16')->nullable();
            $table->integer('17')->nullable();
            $table->integer('18')->nullable();
            $table->integer('19')->nullable();
            $table->integer('20')->nullable();
            $table->integer('21')->nullable();
            $table->integer('22')->nullable();
            $table->integer('23')->nullable();
            $table->integer('24')->nullable();
            $table->integer('25')->nullable();
            $table->integer('26')->nullable();
            $table->integer('27')->nullable();
            $table->integer('28')->nullable();
            $table->integer('29')->nullable();
            $table->integer('30')->nullable();
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
        Schema::dropIfExists('removal_torque_angles');
    }
};
