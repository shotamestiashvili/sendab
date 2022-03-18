<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Customer extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Customer::class;

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
            Text::make('Firstname', 'firstname')->sortable(),
            Text::make('Lastname', 'lastname')->sortable(),
            Date::make('Birthdate', 'birthdate')->sortable(),
            Text::make('Phone Number', 'phone')->sortable(),
            Text::make('Country', 'country')->sortable(),
            Text::make('City', 'city')->sortable(),
            Text::make('Address', 'address1')->sortable(),
            Text::make('Address 2', 'address2')->sortable(),
            Text::make('Postal Code', 'postal')->sortable(),
//            Text::make('Terms', 'terms')->sortable(),
//            Text::make('Verified', 'verified')->sortable(),
            Select::make('Terms', 'terms')->options([
                1 => 'Yes',
                0 => 'No',
            ])->sortable(),
            Select::make('Verified', 'verified')->options([
                1 => 'Yes',
                0 => 'No',
            ])->sortable(),

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
