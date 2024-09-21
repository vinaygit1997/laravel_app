<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpensesTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('expenses')) {
            Schema::create('expenses', function (Blueprint $table) {
                $table->id();
                $table->string('category');
                $table->text('description')->nullable();
                $table->decimal('amount', 10, 2);
                $table->date('paid_date');
                $table->string('month');
                $table->string('file_path')->nullable();
                $table->timestamps();
            });
        }
    }
    
    public function down()
    {
        Schema::dropIfExists('expenses');
    }
}
