<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class TuyenDung extends Model
{
    use LogsActivity;

    protected $table='tuyendung';
    protected $primaryKey='id_tuyendung';
    protected $fillable = [
        'id_tuyendung',
        'name_tuyendung',
        'noidung_tuyendung',
        'Anhien',
    ];
    protected static $logAttributes = ['name_tuyendung','noidung_tuyendung','Anhien', ];

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
          return "Đã {$eventName} tin tuyển dụng";
      }
}
