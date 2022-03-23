<?php

namespace App\Observers;

use App\Models\OutcomeRequest;
use App\Services\Outcome\Payout;

class OutcomeRequestObserver
{
    /**
     * Handle the OutcomeRequest "created" event.
     *
     * @param  \App\Models\OutcomeRequest  $outcomeRequest
     * @return void
     */
    public function created(OutcomeRequest $outcomeRequest)
    {
        if($outcomeRequest->Accept){
            new Payout();
        }
    }

    /**
     * Handle the OutcomeRequest "updated" event.
     *
     * @param  \App\Models\OutcomeRequest  $outcomeRequest
     * @return void
     */
    public function updated(OutcomeRequest $outcomeRequest)
    {
        if($outcomeRequest->Accept){
            new Payout();
        }
    }


}
