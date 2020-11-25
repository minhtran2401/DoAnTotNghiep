<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info', function (Blueprint $table) {
            $table->id('id');
            $table->string('sitename');
            $table->string('sitelogo');
            $table->string('introduction');
            $table->string('contactemail');
            $table->string('contactphone');
            $table->text('address');
            $table->text('googlemap');
            $table->string('contactphone2')->nullable();
            $table->string('contactphone3')->nullable();
            $table->string('address2')->nullable();
            $table->string('address3')->nullable();
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
        Schema::dropIfExists('info');
    }
}
