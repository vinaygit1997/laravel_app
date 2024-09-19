<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddResidentIdToResidentAccountsTable extends Migration
{
    public function up()
    {
        Schema::table('resident_accounts', function (Blueprint $table) {
            $table->foreignId('resident_id')->constrained('resident_details')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('resident_accounts', function (Blueprint $table) {
            $table->dropForeign(['resident_id']);
            $table->dropColumn('resident_id');
        });
    }
}
