<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    public $incrementing = true;
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'DESG_NAME',
    ];

    public function employee()
    {
        return $this->hasMany('App\Employee', 'FKDSG', 'id');
    }
}
