<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable=[
        'name','nrc','phone','address','description','role','division_id','health_center_id'
            ];

            public function health_center()
            {
                return $this->belongsTo('App\Health_Center', 'health_center_id', 'id');
            }

            public function division()
            {
                return $this->belongsTo('App\Division', 'division_id', 'id');
            }
}
