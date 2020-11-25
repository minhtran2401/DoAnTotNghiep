<?php

namespace App;
use App\DonHang;

use Illuminate\Database\Eloquent\Model;

class DonHang extends Model
{
    protected $table='donhang';
    protected $primaryKey='id_donhang';
    protected $fillable = [
        'id_donhang',
        'name_nguoinhan',
        'email_nguoinhan',
        'sdt_nguoinhan',
        'ghichu_donhang',
        'tongtien_donhang',
        'id',
        'id_tinhtrang',
           
    ];
   
}
