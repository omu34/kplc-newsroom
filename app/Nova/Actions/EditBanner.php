<?php

namespace App\Nova\Actions;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Collection;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\ActionFields;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Http\Requests\NovaRequest;

class EditBanner extends Action
{
    use InteractsWithQueue, Queueable;

    /**
     * Perform the action on the given models.
     *
     * @param  \Laravel\Nova\Fields\ActionFields  $fields
     * @param  \Illuminate\Support\Collection  $models
     * @return mixed
     */
    public function handle(ActionFields $fields, Collection $models)
    {
        foreach ($models as $model) {
            $model->update([
                'main_page_name13' => $fields->main_page_name13,
                'main_page_name15' => $fields->main_page_name15,
                'main_page_name16' => $fields->main_page_name16,
                'main_page_name17' => $fields->main_page_name17,
                'main_page_name18' => $fields->main_page_name18,
                'main_page_name19' => $fields->main_page_name19,
                'main_page_name20' => $fields->main_page_name20,
                'main_page_image84' => $fields->main_page_image84,
            ]);
        }

        return Action::message('Banner updated successfully!');
    }

    /**
     * Get the fields available on the action.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            Text::make('Banner Title', 'main_page_name13'),
            Text::make('Button Text', 'main_page_name15'),
            Text::make('Date Updated', 'main_page_name16'),
            Text::make('Number of Views', 'main_page_name17'),
            Text::make('Likes', 'main_page_name18'),
            Text::make('Company Name', 'main_page_name19'),
            Text::make('Description', 'main_page_name20'),
            Image::make('Main Page Image 84', 'main_page_image84')->disk('public')->path('images'),
            // Image::make('Main Page Image 82', 'main_page_image82')->disk('public')->path('images'),
            // Image::make('Main Page Image 83', 'main_page_image83')->disk('public')->path('images'),

        ];
    }
}










