<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhoHang extends Model
{
    protected $table='khohang';
    protected $primaryKey='sku';
    protected $fillable = [
        'sku',
        'khohang_name',
        'khohang_soluong',
        'khohang_donvi',
        'khohang_ngaynhap',
        'khohang_hsd',
        'khohang_trangthai',
    ];

    public function sku()
    {
        return $this->hasOne('App\SanPham','sku','sku');
    }
}
