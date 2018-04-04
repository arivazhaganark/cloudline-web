<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResellerTradeDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reseller_trade_details', function (Blueprint $table) {
            $table->uuid('id');
            $table->timestamps();
            $table->softDeletes();
            $table->string('reseller_id');
            $table->string('firm_name',60)->nullable();
            $table->string('address',60)->nullable();
            $table->string('city',15)->nullable();
            $table->string('phone',15)->nullable();
            $table->string('state',20)->nullable();
            $table->string('fax_no',60)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reseller_trade_details');
    }
}
