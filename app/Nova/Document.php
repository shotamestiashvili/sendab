<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Document extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Document::class;

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
//            ID::make(__('ID'), 'id')->sortable(),
            BelongsTo::make('User', 'user', \App\Nova\User::class),
            Image::make('Front')
                ->thumbnail(function () {
                    return 'http://sendab'. \App\Models\Document::where('user_id', $this->user->id)->value('front');
                })
                ->preview(function () {
                    return 'http://sendab'. \App\Models\Document::where('user_id', $this->user->id)->value('front');

                }),
            Image::make('Back')
                ->thumbnail(function ()  {
                    return 'http://sendab'. \App\Models\Document::where('user_id', $this->user->id)->value('back');
                })
                ->preview(function () {
                    return 'http://sendab'. \App\Models\Document::where('user_id', $this->user->id)->value('back');

                }),
            Image::make('Selfie')
                ->thumbnail(function () {
                    return 'http://sendab'. \App\Models\Document::where('user_id', $this->user->id)->value('selfie');

                })
                ->preview(function () {
                    return 'http://sendab'. \App\Models\Document::where('user_id', $this->user->id)->value('selfie');

                }),
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
