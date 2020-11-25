<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiBlog extends Model {
    protected $table='loaiblog';
    protected $primaryKey='id_loaiblog';
    protected $fillable = [
        'id_loaiblog',
        'name_loaiblog',
        'Anhien',   
        'slug_loaiblog'
       
    ];
    // liên kết khóa chính -> ngoại
    public function ktblog() {
        return $this->hasMany('App\Blog','id_loaiblog','id_loaiblog');
    }

    
}

