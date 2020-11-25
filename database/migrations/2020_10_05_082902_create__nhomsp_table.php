<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhomspTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhomsp', function (Blueprint $table) {
            $table->id('id_nhomsp')->unique();
            $table->string('name_nhomsp');
            $table->string('icon_nhomsp');
            $table->integer('Anhien')->default(0);
            $table->string('slug_nhomsp')->unique();
            $table->timestamps();
            $table->string('hinh_nhomsp')->nullable();

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Nhomsp');
    }
}
