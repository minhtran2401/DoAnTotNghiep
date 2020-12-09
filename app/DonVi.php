<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class DonVi extends Model {
    use LogsActivity;

    protected $table='donvitinh';
    protected $primaryKey='id_donvitinh';
    protected $fillable = [
        'id_nhomsp',
        'name_donvi'
    ];
    protected static $logAttributes = ['name_donvi'];

    protected static $recordEvents = ['created','updated','deleted'];

    //chỉ hiện những gì thay đổi
    protected static $logOnlyDirty = true;


    protected static $logName = 'Admin';

    public function getDescriptionForEvent(string $eventName): string
    {
        return "Đã {$eventName} đơn vị tính";
    }
}

