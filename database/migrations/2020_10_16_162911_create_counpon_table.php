<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCounponTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('counpon', function (Blueprint $table) {
            $table->id('counpon_id');
            $table->string('counpon_name');
            $table->date('counpon_time');
            $table->integer('counpon_type');
            $table->string('counpon_number');
            $table->integer('counpon_quanty');
            $table->string('counpon_code')->unique();
            $table->integer('Anhien');
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
        Schema::dropIfExists('counpon');
    }
}
