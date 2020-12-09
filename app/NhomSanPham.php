<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class NhomSanPham extends Model {
    use LogsActivity;

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

      protected static $logAttributes = ['name_nhomsp','Anhien','hinh_loaisp'];

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
          return "Đã {$eventName} nhóm sản phẩm";
      }
}

