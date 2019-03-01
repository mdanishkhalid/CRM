<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public $incrementing = true;
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'DEPT_NAME',
    ];

    public function employee()
    {
        return $this->hasMany('App\Employee', 'FKDEPT', 'id');
    }
}
