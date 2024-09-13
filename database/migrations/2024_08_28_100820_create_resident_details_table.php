<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResidentDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('resident_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('admin_id');  
            $table->string('flat_no');
            $table->string('floor_no');
            $table->string('block_no')->nullable();
            $table->string('flat_holder_name')->nullable();
            $table->string('name');
            $table->string('aadhar_no')->nullable();
            $table->string('mobile');
            $table->string('email');
            $table->integer('family_members')->nullable();
            $table->integer('vehicles')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('admin_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('resident_details');
    }
}
