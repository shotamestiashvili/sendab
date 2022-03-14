<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('partnior_id')->constrained();
            $table->string('source');
            $table->string('route1')->nullable();
            $table->string('route2')->nullable();
            $table->string('route3')->nullable();
            $table->string('route4')->nullable();
            $table->string('route5')->nullable();
            $table->string('route6')->nullable();
            $table->string('destination');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('routes');
    }
}
