<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Custstatus extends Model
{
    public $incrementing = true;
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'STATUS_NAME',
    ];

    public function customer()
    {
        return $this->hasMany('App\Customer', 'FKSTATUS', 'id');
    }
}
