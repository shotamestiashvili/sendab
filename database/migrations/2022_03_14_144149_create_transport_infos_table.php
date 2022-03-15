<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransportInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transport_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transport_id')->constrained();
            $table->string('plate_number')->nullable();
            $table->string('flight_number')->nullable();
            $table->string('ticket_number')->nullable();
            $table->string('comment')->nullable();
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
        Schema::dropIfExists('transport_infos');
    }
}
