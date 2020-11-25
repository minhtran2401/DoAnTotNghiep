<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HinhSanPham extends Model {
    protected $table='imgchitiet';
    protected $primaryKey='id_img';
    protected $fillable = [
        'id_sanpham',
        'id_img',
        'name_img',
       
    ];
    public $timestamps = false;

    public function hinhsp(){
        return $this->hasOne('App\SanPham','id_sanpham','id_sanpham');
    }
}