<?php

namespace App\Nova;

// use App\Nova\Actions\DeleteFeaturedNews;
// use App\Nova\Actions\EditFeaturedNews;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Image;
use Illuminate\Http\Request;
// use kplcnewsroom\CreateButton\createbutton;
use Laravel\Nova\Http\Requests\NovaRequest;
// use Newsroom\Createbutton\Createbutton;

class FeaturedNews extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\FeaturedNews>
     */
    public static $model = \App\Models\FeaturedNews::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'main_page_name16';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'main_page_name16', 'main_page_name17', 'main_page_name18',
        'main_page_name29','main_page_name83', 'main_page_name85',
        'main_page_name86'
    ];

    public static function search($query)
    {
        return static::where('main_page_name16', 'like', "%$query%")
            ->orWhere('main_page_name17', 'like', "%$query%")
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
            Text::make('Featured News Title', 'main_page_name12')->sortable(),
            Text::make('Date Updated', 'main_page_name16')->sortable(),
            Text::make('Number Of Views', 'main_page_name17')->sortable(),
            Text::make('Likes', 'main_page_name18')->sortable(),
            Text::make('News Description', 'main_page_name29')->sortable(),
            Image::make('Background Image', 'main_page_image83')->disk('public'),
            Image::make('Video Image', 'main_page_image85')->disk('public'),

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
            // new EditFeaturedNews,
            // new DeleteFeaturedNews
        ];
    }
}
