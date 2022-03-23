<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaypalOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paypal_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained();
            $table->string('paypal_order_id');
            $table->string('status');

            $table->string('link1');
            $table->string('rel1');
            $table->string('method1');

            $table->string('link2');
            $table->string('rel2');
            $table->string('method2');

            $table->string('link3');
            $table->string('rel3');
            $table->string('method3');

            $table->string('link4');
            $table->string('rel4');
            $table->string('method4');

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
        Schema::dropIfExists('paypal_orders');
    }
}
