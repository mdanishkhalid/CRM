<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empstatus extends Model
{
    public $incrementing = true;
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'ESTATUS_NAME',
    ];

    public function employee()
    {
        return $this->hasMany('App\Employee', 'FKEMPSTATUS', 'id');
    }
}
