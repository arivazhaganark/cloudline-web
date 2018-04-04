<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResellerBankDetailsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('reseller_bank_details', function (Blueprint $table) {
            $table->uuid('id');
            $table->timestamps();
            $table->softDeletes();
            $table->string('reseller_id');
            $table->string('bank_name',100)->nullable();
            $table->string('contact_no',15)->nullable();
            $table->string('ifsc_code',60)->nullable();
            $table->string('address',60)->nullable();
            $table->string('phone',15)->nullable();
            $table->string('credit_limit',60)->nullable();
            $table->string('ac_no',60)->nullable();
            $table->string('type',30)->nullable();
            $table->string('amount',60)->nullable();
            $table->tinyInteger('collateral')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('reseller_bank_details');
    }

}
