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
        Schema::table('lines', function (Blueprint $table) {
            $table->foreignId('factory_id')->after('id')->nullable()->constrained();
            $table->foreignId('product_id')->after('factory_id')->nullable()->constrained();
            $table->foreignId('format_id')->after('product_id')->nullable()->constrained();
            $table->foreignId('container_supplier_id')->after('container_id')->nullable()->constrained();
            $table->foreignId('cap_id')->after('container_supplier_id')->nullable()->constrained();
            $table->enum('status', ['works', 'cip', 'stop'])->after('cap_id')->default('stop');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lines', function (Blueprint $table) {
            $table->dropConstrainedForeignId('factory_id');
            $table->dropConstrainedForeignId('product_id');
            $table->dropConstrainedForeignId('format_id');
            $table->dropConstrainedForeignId('container_supplier_id');
            $table->dropConstrainedForeignId('cap_id');
            $table->dropColumn('status');
        });
    }
};
