<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResellerContactDetailsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('reseller_contact_details', function (Blueprint $table) {
            $table->uuid('id');
            $table->timestamps();
            $table->softDeletes();
            $table->string('reseller_id');
            $table->string('name', 100)->nullable();
            $table->string('address', 100)->nullable();
            $table->string('city', 100)->nullable();
            $table->string('mobile', 15)->nullable();
            $table->string('type')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('reseller_contact_details');
    }

}
