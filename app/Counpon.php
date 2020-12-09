<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Counpon extends Model {
    use LogsActivity;

    protected $table='counpon';
    protected $primaryKey='counpon_id';
    protected $dates = ['counpon_time']; //Khai báo các field kiểu ngày
    protected $fillable = [
        'counpon_id',
        'counpon_name',
        'counpon_time',
        'counpon_type',
        'counpon_number',
        'counpon_code',
        'counpon_quanty',
        'Anhien',
    ];

    protected static $logAttributes = ['counpon_name','counpon_time','counpon_type',
    'counpon_number',
    'counpon_quanty',
    'Anhien',];

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
        return "Đã {$eventName} mã khuyến mãi";
    }
}

