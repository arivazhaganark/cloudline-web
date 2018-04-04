<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resellers', function (Blueprint $table) {
           $table->uuid('id');
            $table->timestamps();
            $table->softDeletes();
            $table->string('user_id', 36);
            $table->string('firm_name',100)->nullable();
            $table->string('address')->nullable();
            $table->string('city',60)->nullable();
            $table->string('phone',15)->nullable();
            $table->string('email',60)->nullable();
            $table->string('state',100)->nullable();
            $table->string('fax',60)->nullable();
            $table->string('mobile',15)->nullable();
            $table->string('type')->nullable();
            $table->string('years_corp',60)->nullable();
            $table->string('employees_count',60)->nullable();
            $table->string('capital',60)->nullable();
            $table->string('sales_turnover',60)->nullable();
            $table->string('roc_no',100)->nullable();
            $table->string('gst_no',100)->nullable();
            $table->string('pan_no',100)->nullable();
            $table->date('trade_date')->nullable();
            $table->string('place',60)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resellers');
    }
}
