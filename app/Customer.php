<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $incrementing = false;
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'FKSTATUS',
        'FKCATG',
        'FKTYPE',
        'email',
        'password',
        'ADRS',
        'TEL',
        'URL',
        'CPERSON',
        'USID',
        'RMKS',
        'CUST_NAME',
    ];

    public function status()
    {
        return $this->belongsTo('App\Custstatus');

    }

    public function category()
    {
        return $this->belongsTo('App\Custcatg');
    }

    public function types()
    {
        return $this->belongsTo('App\Custtypes', 'FKTYPE');
    }
}
