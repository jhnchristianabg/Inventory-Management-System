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
        Schema::create('cons_purchase_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ConsPriceprunit')->nullable();
            $table->string('ConsSupplier', 255)->nullable();
            $table->string('ConsDateOfPurch', 255)->nullable();
            $table->string('ConsWarranty', 255)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cons_purchase_details');
    }
};
