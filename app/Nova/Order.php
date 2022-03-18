<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Currency;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Order extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Order::class;

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
            Text::make('Order Number', 'order')->sortable(),
            BelongsTo::make('user', 'user', \App\Nova\User::class),
            BelongsTo::make('offer', 'offer', \App\Nova\Offer::class),
            HasMany::make('Pickups', 'pickups', \App\Nova\Pickup::class),
            HasMany::make('Person', 'people', \App\Nova\Person::class),
            HasMany::make('Insuarance', 'insuarance', \App\Nova\Insuarance::class),
            HasMany::make('Term', 'terms', \App\Nova\Term::class),
            Text::make('Amount', 'amount')->sortable(),
            Select::make('Choose Currency', 'currency')->options([
                'usd' => 'USD',
                'euro'=> 'Euro',
                'gel' => 'GEL'
            ])->placeholder('Select your currency'),
            Select::make('Status', 'status')->options([
                 1 => 'Yes',
                 0 => 'No',
            ])
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
