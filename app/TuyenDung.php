<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TuyenDung extends Model
{
    protected $table='tuyendung';
    protected $primaryKey='id_tuyendung';
    protected $fillable = [
        'id_tuyendung',
        'name_tuyendung',
        'noidung_tuyendung',
        'Anhien',   
    ];
   
}
