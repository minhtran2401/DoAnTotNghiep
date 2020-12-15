<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietHD extends Model
{
    protected $table='chitiethd';
    protected $primaryKey='id_hd';
    protected $fillable = [
        'id_sanpham',
        'id_donhang',
        'chitietdonhang_soluong',
        'chitietdonhang_tongtien',
        'ghichu_donhang',           
    ];

  
  
   
}
