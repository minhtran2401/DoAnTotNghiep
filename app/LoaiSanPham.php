<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class LoaiSanPham extends Model {
    protected $table='loaisp';
    protected $primaryKey='id_loaisp';
    protected $fillable = [
        'id_nhomsp',
        'id_loaisp',
        'name_loaisp',
        'Anhien',   
        'icon_loaisp',
        'slug_loaisp',
        'hinh_loaisp'
       
    ];
    public function ktsp() {
        return $this->hasMany('App\SanPham','id_loaisp','id_loaisp');
    }
    public function ktnhomsp() {
        return $this->hasMany('App\NhomSanPham','id_nhomsp','id_nhomsp');
    }
}

