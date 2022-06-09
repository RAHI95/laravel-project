<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DepartmentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $this
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'faculty' => $this->faculty,
            'department_code' => $this->department_code,
            'university' => $this->university,
            // 'teacher' => new TeacherResource($this->whenLoaded('teachers')),
            // 'hall' => new HallResource($this->whenLoaded('hall'))
        ];
    }
}
