<?php

namespace App\Observers;

use App\Models\Partnior;
use App\Models\Offer;

class PartniorObserver
{

    public function created(Partnior $partnior)
    {

        $offer = new Offer();
        $offer->partnior_id = $partnior->id;
        $offer->save();
    }

}
