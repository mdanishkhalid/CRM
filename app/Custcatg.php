<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Custcatg extends Model
{
    public $incrementing = true;
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'CATG_NAME',
    ];

    public function customer()
    {
        return $this->hasMany('App\Customer', 'FKCATG', 'id');
    }
}
