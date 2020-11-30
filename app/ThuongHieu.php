<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class ThuongHieu extends Model {
    use LogsActivity;

    protected $table='nhacungcap';
    protected $primaryKey='id_thuonghieu';
    protected $fillable = [
        'id_thuonghieu',
        'img_thuonghieu',
        'name_thuonghieu',
        'sdt_thuonghieu',
        'link_thuonghieu',
        'slug_thuonghieu',
        'Anhien',
    ];
    protected static $logAttributes = ['name_thuonghieu','sdt_thuonghieu','link_thuonghieu','Anhien'];

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
        return "Đã {$eventName} nhà cung cấp";
    }
}

