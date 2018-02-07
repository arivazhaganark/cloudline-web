<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterPkeyInTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->dropColumn('id');
        });
        Schema::table('customers', function (Blueprint $table) {
            $table->uuid('id')->primary()->first();
            $table->string('name',100)->nullable()->change();
        });
        Schema::table('demorequests', function (Blueprint $table) {
            $table->dropColumn('id');
        });
        Schema::table('demorequests', function (Blueprint $table) {
            $table->uuid('id')->primary()->first();
        });
        Schema::table('partners', function (Blueprint $table) {
            $table->dropColumn('id');
        });
        Schema::table('partners', function (Blueprint $table) {
            $table->uuid('id')->primary()->first();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
