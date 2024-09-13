<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAreaSftToResidentDetailsTable extends Migration
{
    public function up()
    {
        Schema::table('resident_details', function (Blueprint $table) {
            $table->float('area_sft')->nullable()->after('vehicles');
        });
    }

    public function down()
    {
        Schema::table('resident_details', function (Blueprint $table) {
            $table->dropColumn('area_sft');
        });
    }
}
