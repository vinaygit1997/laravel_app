<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResidentAccountsTable extends Migration
{
    public function up()
    {
        Schema::create('resident_accounts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('resident_id')->constrained('resident_details')->onDelete('cascade'); // Ensure this line is present
            $table->string('block_name');
            $table->integer('floor');
            $table->string('flat_number');
            $table->string('flat_type');
            $table->decimal('amount_per_sft', 8, 2);
            $table->integer('square_feet');
            $table->decimal('maintenance_fee', 8, 2);
            $table->string('amount_type');
            $table->date('date');
            $table->string('status');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('resident_accounts');
    }
}

