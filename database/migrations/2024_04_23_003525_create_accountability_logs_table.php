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
        Schema::create('accountability_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('HostID');
            $table->string('Type')->nullable();
            $table->string('Brand', 255);
            $table->string('Model', 255);
            $table->string('SerialNo', 255)->unique();
            $table->string('Location', 255);
            $table->string('issue_date')->nullable();
            $table->string('return_date')->nullable();
            $table->string('is_accountability')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accountability_logs');
    }
};
