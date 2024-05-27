<?php

namespace App\Nova;

use App\Nova\Actions\DeleteLatestVideos;
use App\Nova\Actions\EditLatestVideos;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\BelongsTo;
use Illuminate\Http\Request;
use Laravel\Nova\Http\Requests\NovaRequest;
use Newsroom\Createbutton\Createbutton;

class LatestVideos extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\LatestVideos>
     */
    public static $model = \App\Models\LatestVideos::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'main_page_name11';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id','main_page_name11', 'main_page_name60', 'main_page_name67', 'main_page_name68', 'main_page_name69', 'main_page_name70', 'main_page_name71'
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
            // BelongsTo::make('Main Page', 'mainPage', \App\Nova\MainPage::class)->sortable(),
            BelongsTo::make('Header Navigation', 'headerNavigation', \App\Nova\HeaderNavigation::class)
                ->sortable()
                ->hideFromIndex()
                ->hideWhenCreating()
                ->hideWhenUpdating(),
            Text::make('Latest Videos Title', 'main_page_name11')->sortable(),
            Text::make('Button Text', 'main_page_name60')->sortable(),
            Text::make('Date Updated', 'main_page_name67')->sortable(),
            Text::make('Number of Views', 'main_page_name68')->sortable(),
            Text::make('Video Description', 'main_page_name69')->sortable(),
            Text::make('Likes', 'main_page_name70')->sortable(),
            Text::make('Column Name', 'main_page_name71')->sortable(),
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
            // new EditLatestVideos,
            // new DeleteLatestVideos
        ];
    }
}
