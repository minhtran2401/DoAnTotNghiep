<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoaispTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loaisp', function (Blueprint $table) {
            $table->id('id_loaisp')->unique();
            $table->integer('id_nhomsp')->index();
            $table->string('name_loaisp');
            $table->string('icon_loaisp')->nullable();
            $table->integer('Anhien')->default(0);
            $table->string('slug_loaisp')->unique();
            $table->string('hinh_loaisp')->nullable();
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
        Schema::dropIfExists('loaisp');
    }
}
