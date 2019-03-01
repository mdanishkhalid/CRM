<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Custtypes extends Model
{
    public $incrementing = true;
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'TYPE_NAME',
    ];

    public function customer()
    {
        return $this->hasMany('App\Customer', 'FKTYPE', 'id');
    }
}
