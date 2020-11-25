<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChitiethdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitiethd', function (Blueprint $table) {
            $table->id('id_hd');
            $table->unsignedInteger('id_sanpham');
            $table->unsignedInteger('id_donhang');
            $table->string('chitietdonhang_soluong');
            $table->string('chitietdonhang_tongtien');
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
        Schema::dropIfExists('chitiethd');
    }
}
