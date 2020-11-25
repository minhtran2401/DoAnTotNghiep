<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class QuangCao extends Model
{
    protected $table="quangcao";
    protected $primaryKey="id_quangcao";
    protected $fillable=[
        "id_sanpham",
        "id_blog",
        "banner_quangcao",
        "loai_quangcao",
        "name_quangcao",
        "mota_quangcao",
        "Anhien"
    ];
    public function ktsp() {
        return $this->hasMany('App\SanPham','id_sanpham','id_sanpham');
    }
}
