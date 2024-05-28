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


    public static function search($query)
    {
        return static::where('main_page_name1', 'like', "%$query%")
            ->orWhere('main_page_name2', 'like', "%$query%")
            ->get();
    }

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
            // Text::make('Main NavLink 1', 'main_page_name1')->sortable(),
            Text::make('Main Nav Link 1', 'main_page_name1')->displayUsing(function ($value, $resource) {
                $url = config('app.newsroom_base_url') . "/products/{$resource->id}";
                return "<a href=\"{$url}\" target=\"_blank\" class=\"text-base dark:text-white hover:underline hover:underline-offset-4 font-normal text-black\">{$value}</a>";
            })->asHtml(),

            Text::make('Main Nav Link 2', 'main_page_name2')->displayUsing(function ($value, $resource) {
                $url = config('app.newsroom_base_url') . "/products/{$resource->id}";
                return "<a href=\"{$url}\" target=\"_blank\" class=\"text-base dark:text-white hover:underline hover:underline-offset-4 font-normal text-black\">{$value}</a>";
            })->asHtml(),

            Text::make('Main Nav Link 3', 'main_page_name3')->displayUsing(function ($value, $resource) {
                $url = config('app.newsroom_base_url') . "/products/{$resource->id}";
                return "<a href=\"{$url}\" target=\"_blank\" class=\"text-base dark:text-white hover:underline hover:underline-offset-4 font-normal text-black\">{$value}</a>";
            })->asHtml(),

            Text::make('Main Nav Link 4', 'main_page_name4')->displayUsing(function ($value, $resource) {
                $url = config('app.newsroom_base_url') . "/products/{$resource->id}";
                return "<a href=\"{$url}\" target=\"_blank\" class=\"text-base dark:text-white hover:underline hover:underline-offset-4 font-normal text-black\">{$value}</a>";
            })->asHtml(),

            Text::make('Main Nav Link 5', 'main_page_name5')->displayUsing(function ($value, $resource) {
                $url = config('app.newsroom_base_url') . "/products/{$resource->id}";
                return "<a href=\"{$url}\" target=\"_blank\" class=\"text-base dark:text-white hover:underline hover:underline-offset-4 font-normal text-black\">{$value}</a>";
            })->asHtml(),

            Text::make('Main Nav Link 6', 'main_page_name6')->displayUsing(function ($value, $resource) {
                $url = config('app.newsroom_base_url') . "/products/{$resource->id}";
                return "<a href=\"{$url}\" target=\"_blank\" class=\"text-base dark:text-white hover:underline hover:underline-offset-4 font-normal text-black\">{$value}</a>";
            })->asHtml(),

            Text::make('Main Nav Link 7', 'main_page_name7')->displayUsing(function ($value, $resource) {
                $url = config('app.newsroom_base_url') . "/products/{$resource->id}";
                return "<a href=\"{$url}\" target=\"_blank\" class=\"text-base text-black text-white hover:underline hover:underline-offset-4 font-normal\">{$value}</a>";
            })->asHtml(),

            // Text::make('Main NavLink 2', 'main_page_name2')->sortable(),
            // Text::make('Main NavLink 3', 'main_page_name3')->sortable(),
            // Text::make('Main NavLink 4', 'main_page_name4')->sortable(),
            // Text::make('Main NavLink 5', 'main_page_name5')->sortable(),
            // Text::make('Main NavLink 6', 'main_page_name6')->sortable(),
            // Text::make('Main NavLink 7', 'main_page_name7')->sortable(),
            // Text::make('Main NavLink 8', 'main_page_name19')->sortable(),
            Text::make('Light/Dark', 'main_page_name8')->sortable(),
            Text::make('Increase Text', 'main_page_name9')->sortable(),
            Text::make('Decrease Text', 'main_page_name10')->sortable(),
            Text::make('Open Main Menu', 'main_page_name12')->sortable(),
            Image::make('Logo', 'main_page_image82')->disk('public'),
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








