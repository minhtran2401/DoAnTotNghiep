<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model {
    protected $table='info';
    protected $primaryKey='id';
    protected $fillable = [
        'id',
        'sitename',
        'sitelogo',
        'introduction',
        'contactphone',
        'contactphone2',
        'contactphone3',
        'contactemail',
        'address',
        'address2',
        'address3',
        'googlemap'
    ];
}