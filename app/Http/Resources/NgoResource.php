<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NgoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'phone'=>$this->phone,
            'image'=>asset('/ngo/'.$this->image)
        ];
    }
}
