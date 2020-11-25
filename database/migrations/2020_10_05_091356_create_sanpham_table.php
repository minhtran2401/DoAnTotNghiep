<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanpham', function (Blueprint $table) {
            $table->id('id_sanpham');
            $table->unsignedInteger('id_nhomsp')->index();
            $table->unsignedInteger('id_loaisp');
            $table->string('name_sp');
            $table->text('motadai_sp')->nullable();
            $table->text('motangan_sp')->nullable();
            $table->string('img_sp');
            $table->integer('price_sp');
            $table->integer('id_donvitinh');
            $table->integer('sp_khuyenmai');
            $table->date('time_discount')->nullable();
            $table->integer('old_price_sp')->nullable();
            $table->unsignedInteger('id_thuonghieu');
            $table->integer('Anhien')->default(1);
            $table->string('slug_sp')->unique();
            $table->string('sku')->nullable();
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
        Schema::dropIfExists('sanpham');
    }
}
