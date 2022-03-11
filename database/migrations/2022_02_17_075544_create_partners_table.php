<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->foreignId( 'user_id')->constrained();
            $table->string( 'plateNumer')->nullable();
            $table->string( 'carModel')->nullable();
            $table->string( 'sourceCountry')->nullable();
            $table->string( 'sourceCity');
            $table->string( 'sourceDate');
            $table->string( 'sourceTime');
            $table->string( 'destinationDate1');
            $table->string( 'destinationTime1');
            $table->string( 'destinationDate2')->nullable();
            $table->string( 'destinationDate3')->nullable();
            $table->string( 'destinationCity1');
            $table->string( 'destinationCity2')->nullable();
            $table->string( 'destinationCity3')->nullable();
            $table->boolean('airplane')->default(false);
            $table->boolean('car')->default(false);
            $table->boolean('minibus')->default(false);
            $table->boolean('railway')->default(false);
            $table->boolean('anyParcel')->default(false);
            $table->boolean('laptop')->default(false);
            $table->boolean('smartphone')->default(false);
            $table->boolean('clothes')->default(false);
            $table->boolean('oneKg')->default(false);
            $table->boolean('twoKg')->default(false);
            $table->boolean('fiveKg')->default(false);
            $table->boolean('tenKg')->default(false);
            $table->boolean('twentyKg')->default(false);
            $table->boolean('twentyKgPlus')->default(false);
            $table->integer('length')->nullable();
            $table->integer('width')->nullable();
            $table->integer('height')->nullable();
            $table->boolean('fromStore')->default(false);
            $table->boolean('byHand')->default(false);
            $table->integer('enteredKgPrice')->nullable();
            $table->integer('enteredOrderPrice')->nullable();
            $table->integer('clientOffer')->nullable();

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
        Schema::dropIfExists('partners');
    }
}
