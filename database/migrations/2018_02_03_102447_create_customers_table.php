<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->uuid('id');
            $table->timestamps();
            $table->softDeletes();
            $table->string('created_by',36)->nullable();
            $table->string('updated_by',36)->nullable();
            $table->string('name',36)->nullable();
            $table->string('company_name',100)->nullable();
            $table->string('email',65)->nullable();
            $table->string('phone',15)->nullable();
            $table->tinyInteger('status')->default(0)->comment('0 => Un verified; 1 => Registered; 2 => Customer');
            $table->string('access_token')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
