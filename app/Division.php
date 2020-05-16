<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    protected $fillable=[
'name'
    ];

    public function city()
    {
        return $this->hasMany('App\City', 'division_id','id');
    }
}
