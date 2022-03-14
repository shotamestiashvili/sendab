<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParcelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('partnior_id')->constrained();
            $table->string('item1');
            $table->string('item2')->nullable();
            $table->string('item3')->nullable();
            $table->string('item4')->nullable();
            $table->string('item6')->nullable();
            $table->string('item7')->nullable();
            $table->string('item8')->nullable();
            $table->integer('weight');
            $table->integer('length');
            $table->integer('height');
            $table->integer('width');
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
        Schema::dropIfExists('parcels');
    }
}
