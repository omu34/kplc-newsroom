<?php

namespace App\Nova;

// use App\Nova\Actions\DeleteLatestNews;
// use App\Nova\Actions\EditLatestNews;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\BelongsTo;
use Illuminate\Http\Request;
use Laravel\Nova\Http\Requests\NovaRequest;
// use Newsroom\Createbutton\Createbutton;

class LatestNews extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\LatestNews>
     */
    public static $model = \App\Models\LatestNews::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'main_page_name60';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'main_page_name60',
         'main_page_name61',
        // 'main_page_name62', 'main_page_name63',
        //  'main_page_name64', 'main_page_name65','main_page_name91', 'main_page_name92'
    ];

    public static function search($query)
    {
        return static::where('main_page_name60', 'like', "%$query%")
            ->orWhere('main_page_name61', 'like', "%$query%")
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
            Text::make('Latest News Title', 'main_page_name61')->sortable(),
            Text::make('Button Text ', 'main_page_name60')->sortable(),
            // Text::make('Date Updated', 'main_page_name62')->sortable(),
            // Text::make('Number of Views', 'main_page_name63')->sortable(),
            // Text::make('News Description', 'main_page_name64')->sortable(),
            // Text::make('Likes', 'main_page_name65')->sortable(),
            // Image::make('Main Page Image 91', 'main_page_image91')->disk('public')->path('images'),
            // Image::make('Main Page Image 92', 'main_page_image92')->disk('public')->path('images'),
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
            // new EditLatestNews,
            // new DeleteLatestNews
        ];
    }

    /**
     * Get the label for the resource.
     *
     * @return string
     */
    public static function label()
    {
        return 'Latest News';
    }

    /**
     * Get the singular label for the resource.
     *
     * @return string
     */
    public static function singularLabel()
    {
        return 'Latest News';
    }
}
