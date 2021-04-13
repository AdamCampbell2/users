<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClimbAMileResource extends JsonResource
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
            'type' => 'laps',
            'id'=> $this->id,
            'attributes'=>[
                'user_id'=>$this->user_id,
                'laps'=>$this->laps,
               
                ]
            ];
    }
}
