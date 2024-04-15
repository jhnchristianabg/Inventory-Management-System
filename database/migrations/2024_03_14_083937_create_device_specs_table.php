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
        Schema::create('device_specs', function (Blueprint $table) {

            // This Columns represents the field where the data of Device Specification is being held

            $table->increments('id');
            $table->string('DeviceOperatingSys', 255)->nullable();
            $table->string('DeviceProductKey', 255)->nullable();
            $table->string('DeviceProcessor', 255)->nullable();
            $table->integer('DeviceMemory')->nullable();
            $table->string('DeviceSize')->nullable();
            $table->integer('DeviceStorage1')->nullable();
            $table->integer('DeviceStorage2')->nullable();
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
        Schema::dropIfExists('device_specs');
    }
};
