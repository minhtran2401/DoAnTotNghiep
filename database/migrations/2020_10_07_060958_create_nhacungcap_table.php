<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhacungcapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhacungcap', function (Blueprint $table) {
            $table->id('id_thuonghieu');
            $table->string('img_thuonghieu')->nullable();
            $table->string('name_thuonghieu');
            $table->string('sdt_thuonghieu');
            $table->string('link_thuonghieu')->nullable();
            $table->string('slug_thuonghieu')->unique();
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
        Schema::dropIfExists('nhacungcap');
    }
}
