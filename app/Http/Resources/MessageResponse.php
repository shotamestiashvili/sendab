<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MessageResponse extends JsonResource
{
    private $status;

    public function __construct($status)
    {
        $this->status = $status;
    }

    public function toArray($request)
    {
        return [
            'message' => $this->status,
        ];
    }
}
