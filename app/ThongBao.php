<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ThongBao extends Model
{
    protected $table='activity_log';
    protected $primaryKey='id';
    protected $fillable = [
        'id',
        'log_name',
        'description',
        'subject_id',
        'subject_type',
        'causer_id',
        'causer_type',
        'properties',
        'created_at',
        'updated_at'
    ];

}
