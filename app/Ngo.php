<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ngo extends Model
{
    protected $fillable=[
        'name','image','phone','supported','address','register'
    ];

    public function employee()
    {
        return $this->hasMany('App\Employee', 'ngo_id', 'id');
    }

   public function donate()
   {
       return $this->hasMany('App\Donate', 'ngo_id', 'id');
   }
}
