<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class PaypalOrder extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\PaypalOrder::class;

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
            ID::make(__('ID'), 'id')->sortable()->readonly(),
            Text::make('Order', 'order_id')->sortable()->readonly(),
            Text::make('Paypal', 'paypal_order_id')->sortable()->readonly(),
            Text::make('Status', 'status')->sortable()->readonly(),
            Text::make('link1', 'link1')->sortable()->readonly(),
            Text::make('rel1', 'rel1')->sortable()->readonly(),
            Text::make('method1', 'method1')->sortable()->readonly(),
            Text::make('link2', 'link2')->sortable()->readonly(),
            Text::make('rel2', 'rel2')->sortable()->readonly(),
            Text::make('method2', 'method2')->sortable()->readonly(),
            Text::make('rel3', 'rel3')->sortable()->readonly(),
            Text::make('method3', 'method3')->sortable()->readonly(),
            Text::make('link4', 'link4')->sortable()->readonly(),
            Text::make('rel4', 'rel4')->sortable()->readonly(),
            Text::make('method4', 'method4')->sortable()->readonly(),


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
