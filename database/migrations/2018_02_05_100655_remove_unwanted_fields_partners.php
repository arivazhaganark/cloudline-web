<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveUnwantedFieldsPartners extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('partners', function (Blueprint $table) {
            $table->dropColumn(['video_conferencing','video_streaming','video_recording','video_camera','microphones','reason']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('partners', function (Blueprint $table) {
            $table->string('video_conferencing',100)->nullable();
            $table->string('video_streaming',100)->nullable();
            $table->string('video_recording',100)->nullable();
            $table->string('video_camera',100)->nullable();
            $table->string('microphones',100)->nullable();
            $table->string('reason')->nullable();
        });
    }
}
