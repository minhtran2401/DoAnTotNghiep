<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Sns extends Model
{
    protected $table="sns";
    protected $primaryKey="id";
    protected $fillable = [
        'id',
        'snsicon',
        'snslink',
    ];
}
