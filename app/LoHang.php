<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoHang extends Model
{
    protected $table='lohang';
    protected $primaryKey='id_lohang';
    protected $fillable = [
        'lohang_giamua',
        'lohang_giaban',
        'lohang_slnhap',   
        'lohang_slbanra',
        'lohang_sltrahang',
        'lohang_slhientai',
        'id_sanpham',
        'id_thuonghieu',
        'Anhien',
       
    ];
}
