<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaypalIncomeProcessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paypal_income_processes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('token');
            $table->string('status');
            $table->string('payer_id');
            $table->string('payer_name');
            $table->string('payer_surname');
            $table->string('payer_email');
            $table->string('transaction_id');
            $table->string('currency');
            $table->string('amount');
            $table->string('checkout');
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
        Schema::dropIfExists('paypal_income_processes');
    }
}
