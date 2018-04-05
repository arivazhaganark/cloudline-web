<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPksInResellersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('resellers', function (Blueprint $table) {
            $table->primary('id');
        });
        Schema::table('contactus', function (Blueprint $table) {
            $table->primary('id');
        });
        Schema::table('cms', function (Blueprint $table) {
            $table->primary('id');
        });
        Schema::table('reseller_office_details', function (Blueprint $table) {
            $table->primary('id');
        });
        Schema::table('reseller_bank_details', function (Blueprint $table) {
            $table->primary('id');
        });
        Schema::table('reseller_trade_details', function (Blueprint $table) {
            $table->primary('id');
        });
        Schema::table('reseller_contact_details', function (Blueprint $table) {
            $table->primary('id');
        });
        Schema::table('reseller_files', function (Blueprint $table) {
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('resellers', function (Blueprint $table) {
            $table->primary('resellers_id_primary');
        });
        Schema::table('contactus', function (Blueprint $table) {
            $table->primary('contactus_id_primary');
        });
        Schema::table('cms', function (Blueprint $table) {
            $table->primary('cms_id_primary');
        });
        Schema::table('reseller_office_details', function (Blueprint $table) {
            $table->primary('reseller_office_details_id_primary');
        });
        Schema::table('reseller_bank_details', function (Blueprint $table) {
            $table->primary('reseller_bank_details_id_primary');
        });
        Schema::table('reseller_trade_details', function (Blueprint $table) {
            $table->primary('reseller_trade_details_id_primary');
        });
        Schema::table('reseller_contact_details', function (Blueprint $table) {
            $table->primary('reseller_contact_details_id_primary');
        });
        Schema::table('reseller_files', function (Blueprint $table) {
            $table->primary('reseller_files_id_primary');
        });
    }

}
