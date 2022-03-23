<?php

namespace App\Services\Partnior;

use App\Interfaces\CreatePartniorInterface;

class CreatePartniorFacade
{
    public function __construct(CreatePartniorInterface $partnior, $request){
        $partnior->create($request);
    }
}
