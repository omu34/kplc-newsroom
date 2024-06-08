<?php

namespace App\Livewire;

use App\Models\LatestNews as ModelsLatestNews;
use Livewire\Component;
use Livewire\WithFileUploads;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\File;

class LatestNews extends Component
{
    use WithFileUploads;

    public $news;
    public $selectedLatestNewsId;
    public $selectedNewsIndex = 0;
    public $showModal = false;
    public $showNews = false;
    public $newNews = [

        'day' => '',
        'views' => '',
        'description' => '',
        'likes' => '',
        'link' => '',
        'file' => '',
    ];


    public function mount()
    {
        $this->news = ModelsLatestNews::orderBy('created_at', 'desc')->get();
    }

    public function store()
    {
        $validatedData = $this->validate([

            'newNews.day' => 'required',
            'newNews.views' => 'required',
            'newNews.description' => 'required|min:10',
            'newNews.likes' => 'required',
            'newNews.link' => 'required',
            'newNews.file' => 'required|file|mimes:jpeg,png,jpg,mp4,mov,wav,mp3,pdf,csv,xls,xlsx,zip|max:1048576',

        ]);

        ModelsLatestNews::create($validatedData['newNews']);

        $this->reset('newNews');
        $this->mount();

        $this->dispatchEventBrowser('postStored');
    }

    public function upload()
    {
        try {
            $validatedData = $this->validate([
                'file' => 'required|file|mimes:jpeg,png,jpg,mp4,mov,wav,mp3,pdf,csv,xls,xlsx,zip|max:1048576',

                'newNews.day' => 'required',
                'newNews.views' => 'required',
                'newNews.description' => 'required|min:10',
                'newNews.likes' => 'required',
                'newNews.link' => 'required',
            ]);

            $file = $this->file;
            $fileLink = $file->store('post-files', 'public');

            $validatedData['newNews']['file'] = $fileLink;

            $this->createPostAndFile($validatedData);

            $this->reset('newNews', 'photo');
            $this->mount();

            $this->dispatchEventBrowser('postStored');
        } catch (\Exception $e) {
            $this->dispatchBrowserEvent('alert', [
                'type' => 'error',
                'message' => $e->getMessage(),
            ]);
        }
    }

    private function createPostAndFile($validatedData)
    {
        ModelsLatestNews::create($validatedData['newNews']);

        $file = $this->photo;
        $fileTime = $file->getMTime();
        $fileName = $file->getFilename();
        $fileSize = $file->getSize();
        $fileMimeType = $file->getMimeType();
        $fileTime = date('Y-m-d H:i:s', $fileTime);
        $fileId = Str::uuid()->toString();

        $fileName = Str::slug($fileName);

        File::create([
            'content' => Str::limit($file->getContent(), 1000, '...'),
            'time' => $fileTime,
            'name' => $fileName,
            'mime_type' => $fileMimeType,
            'size' => $fileSize,
            'file_id' => $fileId,
            'file_time' => $fileTime,
            'likes' => 0,
            'views' => 0,
        ]);
    }

    public function edit(int $id)
    {
        $this->selectedLatestNewsId = $id;
        $this->newNews = ModelsLatestNews::find($id)->toArray();
    }

    public function update()
    {
        $validatedData = $this->validate([

            'newNews.day' => 'required',
            'newNews.views' => 'required',
            'newNews.description' => 'required|min:10',
            'newNews.likes' => 'required',
            'newNews.link' => 'required',
            'newNews.file' => 'required|file|mimes:jpeg,png,jpg,mp4,mov,wav,mp3,pdf,csv,xls,xlsx,zip|max:1048576',
        ]);

        ModelsLatestNews::where('id', $this->selectedLatestNewsId)->update($validatedData['newNews']);

        $this->selectedLatestNewsId = null;
        $this->mount();

        $this->dispatchEventBrowser('postUpdated');
    }

    public function cancel()
    {
        $this->selectedLatestNewsId = null;
        $this->reset('newNews');
    }

    public function toggleActive(int $id)
    {
        $new = ModelsLatestNews::find($id);
        $new->update(['is_active' => !$new->is_active]);

        $this->mount();

        $this->dispatchEventBrowser('postToggled');
    }

    public function toggleshowNews()
    {

        $this->showNews = !$this->showNews;

        if ($this->showNews) {
            $this->news = ModelsLatestNews::orderBy('created_at', 'desc')->take(4)->get();
        } else {
            $this->news = ModelsLatestNews::orderBy('created_at', 'desc')->get();
        }

    }


    public function render()
    {
        return view('livewire.latest-news');
    }
}
