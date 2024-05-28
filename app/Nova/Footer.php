<?php

namespace App\Nova;

use App\Nova\Actions\DeleteFooter;
use App\Nova\Actions\EditFooter;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\BelongsTo;
use Illuminate\Http\Request;
use Laravel\Nova\Http\Requests\NovaRequest;
use Newsroom\Createbutton\Createbutton;

class Footer extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Footer>
     */
    public static $model = \App\Models\Footer::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'main_page_name30';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
        'main_page_name30',
        'main_page_name31',
        'main_page_name32',
        'main_page_name33',
        'main_page_name34',
        'main_page_name35',
        'main_page_name36',
        'main_page_name37',
        'main_page_name38',
        'main_page_name39',
        'main_page_name40',
        'main_page_name41',
        'main_page_name42',
        'main_page_name43',
        'main_page_name44',
        'main_page_name45',
        'main_page_name46',
        'main_page_name47',
        'main_page_name48',
        'main_page_name49',
        'main_page_name50',
        'main_page_name51',
        'main_page_name52',
        'main_page_name53',
        'main_page_name54',
        'main_page_name55',
        'main_page_name56',
        'main_page_name57',
        'main_page_name58',
        'main_page_name71',
        'main_page_name72'
    ];

    public static function search($query)
    {
        return static::where('main_page_name30', 'like', "%$query%")
            ->orWhere('main_page_name31', 'like', "%$query%")
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

            // Number::make('Main Page ID', 'main_page_id')->sortable(),
            BelongsTo::make('Header Navigation', 'headerNavigation', \App\Nova\HeaderNavigation::class)
            ->sortable()
            ->hideFromIndex()
            ->hideWhenCreating()
            ->hideWhenUpdating(),
            Text::make('Quick Links', 'main_page_name30')->nullable(),
            Text::make('Dashboard', 'main_page_name31')->nullable(),
            Text::make('Messages', 'main_page_name32')->nullable(),
            Text::make('Notifications', 'main_page_name33')->nullable(),
            Text::make('Facebook', 'main_page_name34')->nullable(),
            Text::make('Instagram', 'main_page_name35')->nullable(),
            Text::make('LinkedIn', 'main_page_name36')->nullable(),
            Text::make('YouTube', 'main_page_name37')->nullable(),
            Text::make('WhatsApp', 'main_page_name38')->nullable(),
            Text::make('X(Twitter)', 'main_page_name39')->nullable(),
            Text::make('TikTok', 'main_page_name40')->nullable(),
            Text::make('Flickr', 'main_page_name41')->nullable(),
            Text::make('Nav Item 1', 'main_page_name42')->nullable(),
            Text::make('Nav Item 2', 'main_page_name43')->nullable(),
            Text::make('Nav Item 3', 'main_page_name44')->nullable(),
            Text::make('Nav Item 1', 'main_page_name45')->nullable(),
            Text::make('Nav Item 2', 'main_page_name46')->nullable(),
            Text::make('Nav Item 3', 'main_page_name47')->nullable(),
            Text::make('Currency 1 Name', 'main_page_name48')->nullable(),
            Text::make('Rate', 'main_page_name49')->nullable(),
            Text::make('Currency 2 Name', 'main_page_name50')->nullable(),
            Text::make('Rate', 'main_page_name51')->nullable(),
            Text::make('Currency 3 Name', 'main_page_name52')->nullable(),
            Text::make('Rate', 'main_page_name53')->nullable(),
            Text::make('Currency 4 Name', 'main_page_name54')->nullable(),
            Text::make('Rate', 'main_page_name55')->nullable(),
            Text::make('Currency 5 Name', 'main_page_name56')->nullable(),
            Text::make('Rate', 'main_page_name57')->nullable(),
            Text::make('Rights', 'main_page_name58')->nullable(),
            Text::make('Column 1 Name', 'main_page_name71')->nullable(),
            Text::make('Column 2 Name', 'main_page_name72')->nullable(),
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
            // new EditFooter,
            // new DeleteFooter
        ];
    }
}
