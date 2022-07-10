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
        Schema::table('shifts', function (Blueprint $table) {
            $table->foreignId('factory_id')->nullable()->after('user_id')->constrained();
            $table->foreignId('shift_mode_id')->nullable()->after('factory_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shifts', function (Blueprint $table) {
            $table->dropConstrainedForeignId('factory_id');
            $table->dropConstrainedForeignId('shift_mode_id');
        });
    }
};
