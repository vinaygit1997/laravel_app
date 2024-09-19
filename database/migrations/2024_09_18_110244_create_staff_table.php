<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
           
            $table->string('name');
            $table->string('category');
            $table->string('gender');
            $table->string('contact');
            $table->string('email');
            $table->string('languages');
            $table->date('doj');
            $table->string('aadhar');
            $table->string('status');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('staff');
    }
}
