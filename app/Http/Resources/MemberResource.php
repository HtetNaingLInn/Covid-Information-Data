<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MemberResource extends JsonResource
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
            'name'=>$this->name,
            'date'=>$this->created_at->diffForHumans(),
            'division'=>$this->division->name,
            'health_center'=>$this->health_center->name,
            'image'=>asset('/member/'.$this->image)
        ];
    }
}
