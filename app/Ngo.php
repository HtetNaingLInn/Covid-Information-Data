<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ngo extends Model
{
    protected $fillable=[
        'name','phone','supported','address'
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
