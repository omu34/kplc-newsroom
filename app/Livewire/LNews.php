<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\LNews as ModelsLNews;

class LNews extends Component
{
    public $news;
    public $newNews = [
        'link' => '',
        'day' => '',
        'views' => '',
        'link' => '',
        'description' => '',
        'likes' => '',
        'video_path'  => '',
    ];
    public $selectedLnewsId = null;
    public $showLnews = false;

    public function mount()
    {
        $this->news = LNews::all();
    }


    public function store()
    {
        $validatedData = $this->validate([
            'newNews.link' => 'required',
            'newNews.day' => 'required',
            'newNews.views' => 'required',
            'newNews.link' => 'required',
            'newNews.description' => 'required',
            'newNews.likes' => 'required',
            'newNews.video_path'  => 'required',
        ]);

        ModelsLNews::create($validatedData['newNews']);

        $this->newNews['link'] = '';
        $this->newNews['day'] = '';
        $this->newNews['views'] = '';
        $this->newNews['description'] = '';
        $this->newNews['likes'] = '';
        $this->newNews['video_path'] = '';
        $this->news = ModelsLNews::all();

        $this->emit('LatestNewstored');
    }

    public function edit(int $id)
    {
        $this->selectedLnewsId = $id;
        $this->newNews = ModelsLNews::find($id)->toArray();
    }

    public function update()
    {
        $validatedData = $this->validate([

            'newNews.link' => 'required',
            'newNews.day' => 'required',
            'newNews.views' => 'required',
            'newNews.link' => 'required',
            'newNews.description' => 'required',
            'newNews.likes' => 'required',
            'newNews.video_path'  => 'required',
        ]);

        ModelsLNews::where('id', $this->selectedLnewsId)->update($validatedData['newNews']);

        $this->selectedLnewsId = null;
        $this->newNews = [
            'title' => '',
            'content' => '',
        ];
        $this->news = ModelsLNews::all();

        $this->dispatchEvent('postUpdated');
    }

    public function cancel()
    {
        $this->selectedLnewsId = null;
        $this->newNews = [
            'title' => '',
            'content' => '',
        ];
    }

    public function toggleActive(int $id)
    {
        $post = ModelsLNews::find($id);
        $post->update(['is_active' => !$post->is_active]);

        $this->news = ModelsLNews::all();

        $this->dispatchEvent('postToggled');
    }

    public function toggleShowLnews()
    {
        $this->showLnews = !$this->showLnews;
    }

    public function render()
    {
        return view('livewire.livewire.l-news');
    }
}
