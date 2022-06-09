<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StuffResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'department' => $this->department,
            'post' => $this->post,

        ];
     }
}
