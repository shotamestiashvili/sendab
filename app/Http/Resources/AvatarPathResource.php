<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AvatarPathResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            $this->file_url
        ];
    }
}
