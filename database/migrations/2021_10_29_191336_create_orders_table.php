<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('member_id');
            $table->string('product_id');
            $table->string('date_of_order')->nullable();
            $table->string('deliver_date')->nullable();
            $table->string('price')->nullable();
            $table->string('amount_method')->nullable();
            $table->string('payment_date')->nullable();
            $table->boolean('paid')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
