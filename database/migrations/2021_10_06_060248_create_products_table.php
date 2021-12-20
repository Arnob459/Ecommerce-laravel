<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('p_name');
            $table->string('p_code');
            $table->string('p_desc');
            $table->string('p_category')->nullable();
            $table->string('p_price')->nullable();
            $table->string('p_quantity')->nullable();
            $table->string('p_stock_date')->nullable();
            $table->string('p_rating')->nullable();
            $table->boolean('p_purchased')->nullable();
            $table->string('file_path')->nullable();
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
        Schema::dropIfExists('products');
    }
}
