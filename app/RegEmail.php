<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class RegEmail extends Model {
    use LogsActivity;

    protected $table='email';
    protected $primaryKey='id_email';
    protected $fillable = [
        'id_email',
        'email',

    ];

    protected static $logAttributes = ['email'];

    protected static $recordEvents = ['deleted'];

    //chỉ hiện những gì thay đổi
    protected static $logOnlyDirty = true;


    protected static $logName = 'Admin';

    // public function tapActivity(Activity $fillable, string $eventName)
    // {
    //     $fillable->description = ".{$eventName}";
    // }

    public function getDescriptionForEvent(string $eventName): string
    {
        return "Đã {$eventName} Email";
    }

}

