<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable=[
        'name','nrc','phone','address','description','role','health_center_id'
            ];

            public function health_center()
            {
                return $this->belongsTo('App\Health_Center', 'health_center_id', 'id');
            }
}
