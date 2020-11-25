<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TinhTrangHD extends Model {
    protected $table='tinhtranghd';
    protected $primaryKey='id_tinhtrang';
    protected $fillable = [
        'id_tinhtrang',
        'name_tinhtrang',
        'mota_tinhtrang',
         
    ];
}

