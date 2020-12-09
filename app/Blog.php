<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Blog extends Model {
    use LogsActivity;

    protected $table='blog';
    protected $primaryKey='id_blog';
    protected $dates = ['time_blog']; //Khai báo các field kiểu ngày
    protected $fillable = [
        'id_blog',
        'id_loaiblog',
        'name_blog',
        'img_blog',
        'tomtat_blog',
        'time_blog',
        'noidung_blog',
        'Anhien',
        'slug_blog',
        'luotxem',
        'id',
        'tag_blog',
        'noibat',
    ];

    public function ktloaiblog() {
        return $this->hasOne('App\LoaiBlog','id_loaiblog','id_loaiblog');
    }
    protected static $logAttributes = ['name_blog','tomtat_blog','noidung_blog'];

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
        return "Đã {$eventName} bài viết";
    }
}

