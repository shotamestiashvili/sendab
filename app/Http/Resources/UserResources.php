<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResources extends JsonResource
{

    public function toArray($request)
    {
        return [
            'name'      => $this->firstname,
            'lastname'  => $this->lastname,
            'email'     => $this->user->email,
            'phone'     => $this->phone,
            'address1'  => $this->address1,
            'birthdate' => $this->birthdate,
        ];
    }
}
