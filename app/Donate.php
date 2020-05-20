<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donate extends Model
{
    protected $fillable=[
        'title','description', 'price','ngo_id','hospital_id'
    ];

    public function ngo()
    {
        return $this->belongsTo('App\Ngo', 'ngo_id', 'id');
    }
    public function hospital()
    {
        return $this->belongsTo('App\Hospital', 'hospital_id', 'id');
    }
}
