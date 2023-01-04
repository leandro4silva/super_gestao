<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->unsignedBigInteger('type_contact_id')->after('email');
        });
        
        DB::statement('UPDATE contacts SET type_contact_id = type_contact');

        Schema::table('contacts', function (Blueprint $table) {
            $table->foreign('type_contact_id')->references('id')->on('type_contacts');
            $table->dropColumn('type_contact');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->integer('type_contact');
            $table->dropForeign('contacts_type_contact_id_foreign');
        });

        DB::statement('UPDATE contacts SET type_contact = type_contact_id');

        Schema::table('contacts', function (Blueprint $table) {
            $table->dropColumn('type_contact_id');
        });
    }
};
