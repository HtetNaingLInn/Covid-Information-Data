<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Health_Center extends Model
{
    protected $fillable=[
        'name',
        'city_id'
            ];
            public function city()
            {
                return $this->belongsTo('App\City', 'city_id', 'id');
            }

            public function member()
            {
                return $this->hasMany('App\Member', 'health_center_id', 'id');
            }
}
