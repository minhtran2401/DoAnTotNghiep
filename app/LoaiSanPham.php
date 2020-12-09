<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class LoaiSanPham extends Model {
    use LogsActivity;

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

     //chỉ định một số thuộc tính thay đổi
     protected static $ignoreChangedAttributes = [ 'updated_at'];

     protected static $logAttributes = ['id_nhomsp','name_loaisp','hinh_loaisp'];

     protected static $recordEvents = ['created','updated','deleted'];

     //chỉ hiện những gì thay đổi
     protected static $logOnlyDirty = true;


     protected static $logName = 'Admin';

     // public function tapActivity(Activity $fillable, string $eventName)
     // {
     //     $fillable->description = ".{$eventName}";
     // }

     public function getDescriptionForEvent(string $eventName): string
     {
         return "Đã {$eventName} loại sản phẩm";
     }
}

