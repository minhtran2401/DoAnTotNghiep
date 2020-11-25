<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonVi extends Model {
    protected $table='donvitinh';
    protected $primaryKey='id_donvitinh';
    protected $fillable = [
        'id_nhomsp',
        'name_donvi'
    ];
}

