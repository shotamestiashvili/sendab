<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CountryResource extends JsonResource
{
//
//    private $country;
//
//    public function __construct($resource)
//    {
//        $this->country = $resource;
//    }

    public function toArray($request)
    {
        return [
             $this->country,
        ];
    }
}
