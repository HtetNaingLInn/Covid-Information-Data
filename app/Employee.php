<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable=[
        'name','role','image','ngo_id','phone','email',
        'address','nrc','age','nationality','qualification','experience'
    ];

    public function ngo()
    {
        return $this->belongsTo('App\Ngo', 'ngo_id', 'id');
    }
}
