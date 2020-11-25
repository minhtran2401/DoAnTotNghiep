<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Counpon extends Model {
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
}

