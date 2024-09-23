<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaintenanceChargesTable extends Migration
{
    public function up()
    {
        Schema::create('maintenance_charges', function (Blueprint $table) {
            $table->id();
            $table->decimal('amount_per_sqt', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('maintenance_charges');
    }
}
