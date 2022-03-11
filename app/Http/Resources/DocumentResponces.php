<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DocumentResponces extends JsonResource
{
    private $status;

    public function __construct($status)
    {
        $this->status = $status;
    }

    public function toArray($request)
    {
        return [
            'status' => $this->status,
        ];
    }
}
