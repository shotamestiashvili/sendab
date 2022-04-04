<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddToTransportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transports', function (Blueprint $table) {
            $table->boolean('ship')->nullable();
            $table->boolean('motorcycle')->nullable();
            $table->boolean('bicycle')->nullable();
            $table->boolean('bus')->nullable();
            $table->boolean('taxi')->nullable();
            $table->boolean('truck')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transports', function (Blueprint $table) {
            //
        });
    }
}
