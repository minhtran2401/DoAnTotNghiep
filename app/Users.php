<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Users extends Model
{
    use LogsActivity;

    protected $table="users";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'name',
        'email',
        'avatar',
        'password',
        'address',
        'phone',
        'active',
        'idgroup',
    ];
    //chỉ định một số thuộc tính thay đổi
    protected static $ignoreChangedAttributes = ['password', 'updated_at'];

    protected static $logAttributes = ['name', 'email'];

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
        return "Đã {$eventName} người dùng";
    }
}
