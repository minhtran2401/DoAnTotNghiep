<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class NhomSanPham extends Model {
    protected $table='nhomsp';
    protected $primaryKey='id_nhomsp';
    protected $fillable = [
        'id_nhomsp',
        'name_nhomsp',
        'Anhien',   
        'icon_nhomsp',
        'slug_nhomsp',
        'hinh_nhomsp'
       
    ];
    // liên kết khóa chính -> ngoại
    public function ktloaisp() {
        return $this->hasMany('App\LoaiSanPham','id_nhomsp','id_nhomsp');
    }
    public function ktsp() {
        return $this->hasMany('App\SanPham','id_nhomsp','id_nhomsp');
    }
}

