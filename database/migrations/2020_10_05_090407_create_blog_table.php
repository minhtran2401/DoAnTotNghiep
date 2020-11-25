<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog', function (Blueprint $table) {
            $table->id('id_blog');
            $table->unsignedInteger('id_loaiblog')->index();
            $table->string('name_blog');
            $table->text('tomtat_blog');
            $table->text('noidung_blog');
            $table->date('time_blog');
            $table->string('luotxem');
            $table->unsignedInteger('id');
            $table->string('img_blog');
            $table->string('slug_blog')->unique();
            $table->integer('Anhien');
            $table->integer('noibat');
            $table->string('tag_blog');
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
        Schema::dropIfExists('blog');
    }
}
