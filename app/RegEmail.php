<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegEmail extends Model {
    protected $table='email';
    protected $primaryKey='id_email';
    protected $fillable = [
        'id_email',
        'email',
 
    ];

    
}

