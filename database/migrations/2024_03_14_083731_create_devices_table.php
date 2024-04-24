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
        Schema::create('devices', function (Blueprint $table) {

            // This Columns represents the field where the data of Devices is being held

            $table->increments('id');
            $table->string('DeviceID')->nullable();
            $table->string('DeviceType');
            $table->string('DeviceName', 255);
            $table->string('DeviceBrand', 255);
            $table->string('DeviceModel', 255);
            $table->string('DeviceSerialNo', 255)->unique();
            $table->string('DeviceMacAdd', 255)->nullable();
            $table->string('DeviceLocation', 255);
            $table->string('DeviceStatus', 255)->nullable();
            $table->string('DeviceRemarks', 255)->nullable();
            $table->string('is_accountability')->nullable();
            $table->string('issue_date')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devices');
    }
};
