<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $modulesStr = '';
        foreach($this->modules as $module) {
            $modulesStr .= module->$module;
            if($this->modules->last() != $module) {
                $modulesStr .= ', ';
            }
        }

        return [
            'id' => $this->id,
            'name' => $this->name,
            'availableSpots' => $this->availableSpots,
            'modules' => $this->modules->implode('name', ', ')
        ];

        return parent::toArray($request);
    }
}
