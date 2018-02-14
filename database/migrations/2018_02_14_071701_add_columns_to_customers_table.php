<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->text('plan_name',100)->nullable()->after('phone');
            $table->text('plan_price',100)->nullable()->after('plan_name');
            $table->text('service_availability',100)->nullable()->after('plan_price');
            $table->date('start_date')->nullable()->after('service_availability');
            $table->date('end_date')->nullable()->after('start_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customers', function (Blueprint $table) {
             $table->dropColumn(['plan_name','plan_price','service_availability','start_date','end_date']);
        });
    }
}
