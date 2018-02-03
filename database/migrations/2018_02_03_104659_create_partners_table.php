<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->uuid('id');
            $table->timestamps();
            $table->softDeletes();
            $table->string('created_by',36)->nullable();
            $table->string('updated_by',36)->nullable();
            $table->string('user_id');
            $table->tinyInteger('partner_type')->nullable();
            $table->string('company_name',100)->nullable();
            $table->string('email',65)->nullable();
            $table->string('phone',15)->nullable();
            $table->string('address')->nullable();
            $table->string('state',100)->nullable();
            $table->string('years_business',100)->nullable();
            $table->string('no_of_sales',100)->nullable();
            $table->string('no_of_technical',100)->nullable();
            $table->string('annual_revenue')->nullable();
            $table->string('sales_territory')->nullable();
            $table->string('current_focus')->nullable();
            $table->string('products_offered')->nullable();
            $table->string('brands_deal')->nullable();
            $table->string('video_conferencing',100)->nullable();
            $table->string('video_streaming',100)->nullable();
            $table->string('video_recording',100)->nullable();
            $table->string('video_camera',100)->nullable();
            $table->string('microphones',100)->nullable();
            $table->string('reason')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partners');
    }
}
