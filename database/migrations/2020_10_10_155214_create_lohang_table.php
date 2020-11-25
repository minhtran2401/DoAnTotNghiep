<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLohangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lohang', function (Blueprint $table) {
            $table->id('id_lohang');
            $table->integer('lohang_hsd');
            $table->string('lohang_giamua');
            $table->string('lohang_giaban');
            $table->integer('lohang_slnhap');
            $table->integer('lohang_slbanra');
            $table->integer('lohang_sltrahang');
            $table->integer('lohang_slhientai');
            $table->unsignedInteger('id_sanpham')->index();
            $table->unsignedInteger('id_thuonghieu')->index();
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
        Schema::dropIfExists('lohang');
    }
}
