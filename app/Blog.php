<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model {
    protected $table='blog';
    protected $primaryKey='id_blog';
    protected $dates = ['time_blog']; //Khai báo các field kiểu ngày
    protected $fillable = [
        'id_blog',
        'id_loaiblog',
        'name_blog',
        'img_blog',
        'tomtat_blog',
        'time_blog',
        'noidung_blog',
        'Anhien',
        'slug_blog',
        'luotxem',
        'id',
        'tag_blog',
        'noibat',
    ];

    public function ktloaiblog() {
        return $this->hasOne('App\LoaiBlog','id_loaiblog','id_loaiblog');
    }

}

