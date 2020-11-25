<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuangcaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quangcao', function (Blueprint $table) {
            $table->id('id_quangcao');
            $table->integer('id_sanpham')->nullable();
            $table->integer('id_blog')->nullable();
            $table->string('banner_quangcao')->nullable();
            $table->integer('loai_quangcao')->nullable();
            $table->string('name_quangcao')->nullable();
            $table->string('mota_quangcao')->nullable();
            $table->integer('Anhien')->default(1);
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
        Schema::dropIfExists('quangcao');
    }
}
