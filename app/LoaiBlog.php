<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class LoaiBlog extends Model {
    use LogsActivity;

    protected $table='loaiblog';
    protected $primaryKey='id_loaiblog';
    protected $fillable = [
        'id_loaiblog',
        'name_loaiblog',
        'Anhien',
        'slug_loaiblog'

    ];
    // liên kết khóa chính -> ngoại
    public function ktblog() {
        return $this->hasMany('App\Blog','id_loaiblog','id_loaiblog');
    }

     //chỉ định một số thuộc tính thay đổi
     protected static $ignoreChangedAttributes = [ 'updated_at'];

     protected static $logAttributes = ['name_loaiblog'];

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
         return "Đã {$eventName} blog";
     }
}

