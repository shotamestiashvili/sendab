<?php

namespace App\Interfaces;

use Illuminate\Support\Collection;

interface EditPartniorInterface
{
    public function edit($request, $userId, $partnior_id);
}
