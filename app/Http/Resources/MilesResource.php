<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MilesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
        'data'=>ClimbAMileResource::collection($this)
        ];
    }
}
