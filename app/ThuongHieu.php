<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThuongHieu extends Model {
    protected $table='nhacungcap';
    protected $primaryKey='id_thuonghieu';
    protected $fillable = [
        'id_thuonghieu',
        'img_thuonghieu',
        'name_thuonghieu',
        'sdt_thuonghieu',
        'link_thuonghieu',
        'slug_thuonghieu',
        'Anhien',   
    ];
}

