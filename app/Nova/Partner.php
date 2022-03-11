<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Partner extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Partner::class;

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
            BelongsTo::make('USER ID', 'user', \App\Nova\User::class),
            Text::make('Plate Number', 'plateNumer')->sortable(),
            Text::make('Car Model', 'carModel')->sortable(),
            Text::make('Source Country', 'sourceCountry')->sortable(),
            Text::make('Source City', 'sourceCity')->sortable(),
            Text::make('Source Time', 'sourceTime')->sortable(),
            Text::make('Source Date', 'sourceDate')->sortable(),
            Text::make('Destination Date', 'destinationDate1')->sortable(),
            Text::make('Destination Time', 'destinationTime1')->sortable(),
            Text::make('Destination City', 'destinationCity1')->sortable(),
            Text::make('Airplane', 'airplane')->sortable(),
            Text::make('Car', 'car')->sortable(),
            Text::make('Minibus', 'minibus')->sortable(),
            Text::make('Railway', 'railway')->sortable(),
            Text::make('Any Parcel', 'anyParcel')->sortable(),
            Text::make('Laptop', 'laptop')->sortable(),
            Text::make('Smartphone', 'smartphone')->sortable(),
            Text::make('Clothes', 'clothes')->sortable(),

            Text::make('One Kg', 'oneKg')->sortable(),
            Text::make('Two Kg', 'twoKg')->sortable(),
            Text::make('Five Kg', 'fiveKg')->sortable(),
            Text::make('Ten Kg', 'tenKg')->sortable(),
            Text::make('Twenty Kg', 'twentyKg')->sortable(),
            Text::make('Twenty Plus KG', 'twentyKgPlus')->sortable(),
            Text::make('Parcel Length', 'length')->sortable(),
            Text::make('Parcel Width', 'width')->sortable(),
            Text::make('Parcel Height', 'height')->sortable(),
            Text::make('Pick up from Store', 'fromStore')->sortable(),
            Text::make('Hand by Hand', 'byHand')->sortable(),
            Text::make('One Kg Price', 'enteredKgPrice')->sortable(),
            Text::make('Sum Price', 'enteredOrderPrice')->sortable(),
            Text::make('Accept Offer ?', 'clientOffer')->sortable(),

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
