<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PocketShopResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'name'    => $this->name,
            'country' => $this->country,
            'city'    => $this->city,
            'address' => $this->address,
            'comment' => $this->comment,
        ];
    }
}
