<?php

namespace App\Nova\Actions;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Collection;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\ActionFields;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class EditLatestVideos extends Action
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
                'main_page_name11' => $fields->main_page_name11,
                'main_page_name60' => $fields->main_page_name60,
                'main_page_name67' => $fields->main_page_name67,
                'main_page_name68' => $fields->main_page_name68,
                'main_page_name69' => $fields->main_page_name69,
                'main_page_name70' => $fields->main_page_name70,
                'main_page_name71' => $fields->main_page_name71,
                // 'main_page_image84' => $fields->main_page_image84,
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
            Text::make('Latest Videos Title', 'main_page_name11')->sortable(),
            Text::make('Button Text', 'main_page_name60')->sortable(),
            Text::make('Date Updated', 'main_page_name67')->sortable(),
            Text::make('Number of Views', 'main_page_name68')->sortable(),
            Text::make('Video Description', 'main_page_name69')->sortable(),
            Text::make('Likes', 'main_page_name70')->sortable(),
            Text::make('Column Name', 'main_page_name71')->sortable(),
            // Image::make('Main Page Image 82', 'main_page_image82')->disk('public')->path('images'),
            // Image::make('Main Page Image 83', 'main_page_image83')->disk('public')->path('images'),
        ];
    }
}
