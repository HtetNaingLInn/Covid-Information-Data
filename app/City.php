<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable=[
        'name',
        'division_id'
            ];

            public function division()
            {
                return $this->belongsTo('App\Division', 'division_id');
            }

            public function health_center()
            {
                return $this->hasOne('App\Health_Center', 'city_id', 'id');
            }

            public function member()
            {
                return $this->hasManyThrough('App\Member','App\Health_Center','city_id','health_center_id');
            }
}
