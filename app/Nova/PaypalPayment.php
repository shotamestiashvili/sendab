<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class PaypalPayment extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\PaypalPayment::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),
            Text::make('token', 'token')->sortable()->readonly(),
            Text::make('status', 'status')->sortable()->readonly(),
            Text::make('payer_id', 'payer_id')->sortable()->readonly(),
            Text::make('payer_name', 'payer_name')->sortable()->readonly(),
            Text::make('payer_surname', 'payer_surname')->sortable()->readonly(),
            Text::make('payer_email', 'payer_email')->sortable()->readonly(),
            Text::make('transaction_id', 'transaction_id')->sortable()->readonly(),
            Text::make('currency', 'currency')->sortable()->readonly(),
            Text::make('amount', 'amount')->sortable()->readonly(),
            Text::make('checkout', 'checkout')->sortable()->readonly(),
//            Text::make('token', 'token')->sortable(),

        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
