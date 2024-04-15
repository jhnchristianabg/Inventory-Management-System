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
        Schema::create('device_purchase_details', function (Blueprint $table) {

            // This Columns represents the field where the data of Device Purchase Details is being held

            $table->increments('id');
            $table->integer('DevicePriceprunit')->nullable();
            $table->string('DeviceSupplier', 255)->nullable();
            $table->string('DeviceDateOfPurch', 255)->nullable();
            $table->string('DeviceWarranty', 255)->nullable();
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
        Schema::dropIfExists('device_purchase_details');
    }
};
