<?php

namespace App\Nova;

// use App\Nova\Actions\DeleteLatestGallery;
// use App\Nova\Actions\EditLatestGallery;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\BelongsTo;
use Illuminate\Http\Request;
use Laravel\Nova\Http\Requests\NovaRequest;
// use Newsroom\Createbutton\Createbutton;

class LatestGallery extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\LatestGallery>
     */
    public static $model = \App\Models\LatestGallery::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'main_page_name23';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'main_page_name23',
        //  'main_page_name24', 'main_page_name25', 'main_page_name81',
        //  'main_page_name59', 'main_page_name60','main_page_image89', 'main_page_image90'
    ];


    public static function search($query)
    {
        return static::where('main_page_name23', 'like', "%$query%")
            ->orWhere('main_page_name24', 'like', "%$query%")
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
            Text::make('Gallery Title', 'main_page_name23')->sortable(),
            // Text::make('Date Updated', 'main_page_name24')->sortable(),
            // Text::make('Views', 'main_page_name25')->sortable(),
            // Text::make('Gallery Description', 'main_page_name81')->sortable(),
            // Text::make('Likes', 'main_page_name59')->sortable(),
            // Text::make('Button Text', 'main_page_name60')->sortable(),
            // Image::make('Gallery Background Image', 'main_page_image89')->disk('public')->path('images'),
            // Image::make('Video Image', 'main_page_image90')->disk('public')->path('images'),

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
            // new EditLatestGallery,
            // new DeleteLatestGallery
        ];
    }
}
