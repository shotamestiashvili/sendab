<?php

namespace App\Services\Partnior;


use App\Interfaces\EditPartniorInterface;

class EditPartniorFacade
{
    public function __construct(EditPartniorInterface $partnior, $request, $userId, $partnior_id){
         $partnior->edit($request, $userId, $partnior_id);
    }
}
