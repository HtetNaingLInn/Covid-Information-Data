<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $fillable=[
        'name','address','division_id'
    ];

    public function division()
    {
        return $this->belongsTo('App\Division', 'division_id', 'id');
    }

    public function donate()
   {
       return $this->hasMany('App\Donate', 'hospital_id', 'id');
   }
    
}
