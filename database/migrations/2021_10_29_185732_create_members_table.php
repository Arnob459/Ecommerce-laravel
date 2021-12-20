<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();

            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();

            $table->string('password');


            $table->string('address')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('total_amount_spend')->nullable();
            $table->string('due_amount')->nullable();
            $table->string('voucher')->nullable();

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
        Schema::dropIfExists('members');
    }
}
