<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class KhoHang extends Model
{
    use LogsActivity;

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
    protected static $logAttributes = [
    'khohang_name',
    'khohang_soluong',
    'khohang_donvi',
    'khohang_ngaynhap',
    'khohang_hsd',
    'khohang_trangthai',
];

    protected static $recordEvents = ['created','updated','deleted'];

    //chỉ hiện những gì thay đổi
    protected static $logOnlyDirty = true;


    protected static $logName = 'Admin';

    public function getDescriptionForEvent(string $eventName): string
    {
        return "Đã {$eventName} lô hàng";
    }
}
