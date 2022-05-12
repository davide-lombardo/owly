<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
{

    /**
     * The "data" wrapper that should be applied.
     *
     * @var string
     */
    public static $wrap = 'course';

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        return [
            'id' => (string)$this->id,
            'type' => 'Courses',
            'attributes' => [
                'name' => $this->name,
                'availableSpots' => $this->availableSpots,
                'modules' => $this->modules->implode('name', ', '),
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at
            ]
        ];

    }

}
