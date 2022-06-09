<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HallResource extends JsonResource
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
            'provost_name' => $this->provost_name,
            'provost_department' => $this->provost_department,
            'department' => new DepartmentResource($this->whenLoaded('department')),

        ];
       }
}
