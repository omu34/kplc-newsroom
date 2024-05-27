<?php

namespace App\Nova;

use App\Nova\Actions\DeleteHeaderNavigation;
use App\Nova\Actions\EditHeaderNavigation;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Image;
use Illuminate\Http\Request;
use Laravel\Nova\Http\Requests\NovaRequest;
use Newsroom\Createbutton\Createbutton;

class HeaderNavigation extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\HeaderNavigation>
     */
    public static $model = \App\Models\HeaderNavigation::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'main_page_name1';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'main_page_name1', 'main_page_name2', 'main_page_name3',
        'main_page_name4', 'main_page_name5', 'main_page_name6',
        'main_page_name7', 'main_page_name19','main_page_name82',
        'main_page_name83',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('Main NavLink 1', 'main_page_name1')->sortable(),
            Text::make('Main NavLink 2', 'main_page_name2')->sortable(),
            Text::make('Main NavLink 3', 'main_page_name3')->sortable(),
            Text::make('Main NavLink 4', 'main_page_name4')->sortable(),
            Text::make('Main NavLink 5', 'main_page_name5')->sortable(),
            Text::make('Main NavLink 6', 'main_page_name6')->sortable(),
            Text::make('Main NavLink 7', 'main_page_name7')->sortable(),
            // Text::make('Main Page Name 8', 'main_page_name8')->sortable(),
            // Text::make('Main Page Name 9', 'main_page_name9')->sortable(),
            // Text::make('Main Page Name 10', 'main_page_name10')->sortable(),
            // Text::make('Main Page Name 11', 'main_page_name11')->sortable(),
            // Text::make('Main Page Name 12', 'main_page_name12')->sortable(),
            Text::make('Main NavLink 8', 'main_page_name19')->sortable(),
            Image::make('Main Page Image 82', 'main_page_image82')->disk('public'),
            Image::make('Main Page Image 83', 'main_page_image83')->disk('public')
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [
            // new Createbutton()
        ];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [
            // new EditHeaderNavigation,
            // new DeleteHeaderNavigation
        ];
    }
}








