<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveAdminCommentsToDemorequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('demorequests', function (Blueprint $table) {
            $table->dropColumn('admin_comments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('demorequests', function (Blueprint $table) {
            $table->text('admin_comments',100)->nullable()->after('person_incharge');
        });
    }
}
