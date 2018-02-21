<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertContactInfosToSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('settings', function (Blueprint $table) {
            \App\Models\Setting::insert([
                'name' => 'CONTACT',
                'meta_key' => 'contact_email',
                'meta_value' => 'sales@atnetindia.net'
            ]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('settings', function (Blueprint $table) {
            \App\Models\User::where('name', 'CONTACT')->forceDelete();
        });
    }
}
