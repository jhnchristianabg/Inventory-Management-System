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
        Schema::create('cables_and_peripherals', function (Blueprint $table) {
            // This Columns represents the field where the data of Devices is being held

            $table->increments('id');
            $table->string('CPID');
            $table->string('CPType')->nullable();
            $table->string('CPName', 255);
            $table->string('CPBrand', 255);
            $table->string('CPModel', 255);
            $table->string('CPQuantity', 255)->nullable();
            $table->string('CPStatus', 255)->nullable();
            $table->string('CPRemarks', 255)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cables_and_peripherals');
    }
};
