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
        Schema::create('section_weight_analyses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('syrup_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id');
            $table->foreignId('line_id');
            $table->foreignId('container_supplier_id');
            $table->foreignId('format_id');
            $table->foreignId('cap_id');
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
        Schema::dropIfExists('section_weight_analyses');
    }
};