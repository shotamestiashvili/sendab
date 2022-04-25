<?php

namespace App\Observers;

use App\Models\Balance;
use App\Models\Income;

class IncomeObserver
{
    /**
     * Handle the Income "created" event.
     *
     * @param  \App\Models\Income  $income
     * @return void
     */
    public function created(Income $income)
    {
        Balance::where('id', $income->balance_id)->increment('balance_amount', $income->income_amount);
    }

    /**
     * Handle the Income "updated" event.
     *
     * @param  \App\Models\Income  $income
     * @return void
     */
    public function updated(Income $income)
    {
        Balance::where('id', $income->balance_id)->increment('balance_amount', $income->income_amount);
    }


}
