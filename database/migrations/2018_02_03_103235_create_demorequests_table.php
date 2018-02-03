<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemorequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demorequests', function (Blueprint $table) {
            $table->uuid('id');
            $table->timestamps();
            $table->softDeletes();
            $table->string('created_by',36)->nullable();
            $table->string('updated_by',36)->nullable();
            $table->string('customer_id',36);
            $table->string('location')->nullable();
            $table->date('preferred_date')->nullable();
            $table->date('alternate_date')->nullable();
            $table->time('schedule_time')->nullable();
            $table->text('person_incharge')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('demorequests');
    }
}
