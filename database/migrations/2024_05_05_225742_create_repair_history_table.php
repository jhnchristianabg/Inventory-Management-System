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
        Schema::create('repair_history', function (Blueprint $table) {

            $table->increments('id');
            $table->string('Type');
            $table->string('Name', 255)->nullable();
            $table->string('SerialNo', 255);
            $table->string('Status', 255)->nullable();
            $table->string('Remarks', 255)->nullable();
            $table->string('Defect')->nullable();
            $table->string('issue_date')->nullable();
            $table->timestamp('repair_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('repair_history');
    }
};
