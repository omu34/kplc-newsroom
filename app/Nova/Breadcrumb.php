<?php

namespace App\Nova;

// use App\Nova\Actions\DeleteBreadCrumb;
// use App\Nova\Actions\EditBreadcrumb;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\BelongsTo;
use Illuminate\Http\Request;
use Laravel\Nova\Http\Requests\NovaRequest;
// use Newsroom\Createbutton\Createbutton;

class Breadcrumb extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Breadcrumb>
     */
    public static $model = \App\Models\Breadcrumb::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'main_page_name26';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'main_page_name26', 'main_page_name27', 'main_page_name28'
    ];

    public static function search($query)
    {
        return static::where('main_page26', 'like', "%$query%")
            ->orWhere('main_page_image27', 'like', "%$query%")
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
            BelongsTo::make('Header Navigation', 'headerNavigation', \App\Nova\HeaderNavigation::class)
                ->sortable()
                ->hideFromIndex()
                ->hideWhenCreating()
                ->hideWhenUpdating(),
            Text::make('Page Location ', 'main_page_name26')->sortable(),
            Text::make('Main Page Name', 'main_page_name27')->sortable(),
            Text::make('Single Page Name', 'main_page_name28')->sortable(),
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
            // new EditBreadcrumb,
            // new DeleteBreadCrumb
        ];
    }
}
