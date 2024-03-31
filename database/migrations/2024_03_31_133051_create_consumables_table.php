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
        Schema::create('consumables', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ConsID');
            $table->string('ConsType')->nullable();
            $table->string('ConsName', 255);
            $table->string('ConsBrand', 255);
            $table->string('ConsModel', 255);
            $table->string('ConsQuantity', 255)->nullable();
            $table->string('ConsStatus', 255)->nullable();
            $table->string('ConsRemarks', 255)->nullable();
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
        Schema::dropIfExists('consumables');
    }
};
