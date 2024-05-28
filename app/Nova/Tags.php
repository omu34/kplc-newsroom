<?php

namespace App\Nova;

use App\Nova\Actions\DeleteTags;
use App\Nova\Actions\EditTags;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\BelongsTo;
use Illuminate\Http\Request;
use Laravel\Nova\Http\Requests\NovaRequest;
use Newsroom\Createbutton\Createbutton;

class Tags extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Tags>
     */
    public static $model = \App\Models\Tags::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'main_page_name71';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'main_page_name71', 'main_page_name72'
    ];

    public static function search($query)
    {
        return static::where('main_page_name71', 'like', "%$query%")
            ->orWhere('main_page_name72', 'like', "%$query%")
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
            // BelongsTo::make('Header Navigation', 'headerNavigation', \App\Nova\HeaderNavigation::class)->sortable(),
            BelongsTo::make('Header Navigation', 'headerNavigation', \App\Nova\HeaderNavigation::class)
                ->sortable()
                ->hideFromIndex()
                ->hideWhenCreating()
                ->hideWhenUpdating(),
            Text::make('Column 1 Name', 'main_page_name71')->sortable(),
            Text::make('Column 2 Name', 'main_page_name72')->sortable(),
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
            // new EditTags,
            // new DeleteTags
        ];
    }
}
