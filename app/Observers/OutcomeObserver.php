<?php

namespace App\Observers;

use App\Models\Balance;
use App\Models\Outcome;

class OutcomeObserver
{
    /**
     * Handle the Outcome "created" event.
     *
     * @param  \App\Models\Outcome  $outcome
     * @return void
     */
    public function created(Outcome $outcome)
    {
        Balance::where('id', $outcome->balance_id)->decrement('balance_amount', $outcome->outcome_amount);
    }

    /**
     * Handle the Outcome "updated" event.
     *
     * @param  \App\Models\Outcome  $outcome
     * @return void
     */
    public function updated(Outcome $outcome)
    {
        Balance::where('id', $outcome->balance_id)->decrement('balance_amount', $outcome->outcome_amount);
    }


}
