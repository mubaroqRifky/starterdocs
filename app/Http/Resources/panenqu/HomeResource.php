<?php

namespace App\Http\Resources\panenqu;

use App\Http\Resources\BaseResource;

class HomeResource extends BaseResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return parent::toArray($request);
        // return [
        //     'tes' => $this->tes,
        // ];
    }
}
