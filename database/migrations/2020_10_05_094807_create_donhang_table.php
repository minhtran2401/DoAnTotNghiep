<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donhang', function (Blueprint $table) {
            $table->id('id_donhang');
            $table->string('name_nguoinhan');
            $table->string('email_nguoinhan');
            $table->string('sdt_nguoinhan');
            $table->text('ghichu_donhang');
            $table->integer('tongtien_donhang');
            $table->unsignedInteger('id')->nullable();
            $table->unsignedInteger('id_tinhtrang');
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
        Schema::dropIfExists('donhang');
    }
}
