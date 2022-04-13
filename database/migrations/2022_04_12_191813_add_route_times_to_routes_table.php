<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRouteTimesToRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('routes', function (Blueprint $table) {
            $table->time('source_time');
            $table->time('route1_time')->nullable();
            $table->time('route2_time')->nullable();
            $table->time('route3_time')->nullable();
            $table->time('route4_time')->nullable();
            $table->time('route5_time')->nullable();
            $table->time('route6_time')->nullable();
            $table->time('destination_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('routes', function (Blueprint $table) {
            //
        });
    }
}
