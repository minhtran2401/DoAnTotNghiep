<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class QuangCao extends Model
{
    use LogsActivity;

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

    protected static $logAttributes = ['name_quangcao','mota_quangcao'];

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
        return "Đã {$eventName} quảng cáo";
    }
}
