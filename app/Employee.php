<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public $incrementing = false;
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'EMP_NAME',
        'EMP_FNAME',
        'FKEMPSTATUS',
        'FKDEPT',
        'FKDSG',
        'email',
        'password',
        'ADRS',
        'MOB',
        'USID',
    ];

    public function empstatus()
    {
        return $this->belongsTo('App\Empstatus', 'FKEMPSTATUS');

    }

    public function empdept()
    {
        return $this->belongsTo('App\Department', 'FKDEPT');
    }

    public function empdsg()
    {
        return $this->belongsTo('App\Designation', 'FKDSG');
    }
}
