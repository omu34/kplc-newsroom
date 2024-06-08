<?php

namespace App\Livewire;



use App\Models\LatestVideos as ModelsLatestVideos;
use Livewire\Component;
use Livewire\WithFileUploads;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\File;
class LatestVideos extends Component
{
    use WithFileUploads;

    public $videos;
    public $selectedLatestVideosId;
    public $selectedVideoIndex = 0;
    public $showModal = false;
    public $showVideos = false;
    public $newVideo = [

        'day' => '',
        'views' => '',
        'description' => '',
        'likes' => '',
        'link' => '',
        'file' => '',
    ];


    public function mount()
    {
        $this->videos = ModelsLatestVideos::orderBy('created_at', 'desc')->get();
    }

    public function store()
    {
        $validatedData = $this->validate([

            'newVideo.day' => 'required',
            'newVideo.views' => 'required',
            'newVideo.description' => 'required|min:10',
            'newVideo.likes' => 'required',
            'newVideo.link' => 'required',
            'newVideo.file' => 'required|file|mimes:jpeg,png,jpg,mp4,mov,wav,mp3,pdf,csv,xls,xlsx,zip|max:1048576',

        ]);

        ModelsLatestVideos::create($validatedData['newVideo']);

        $this->reset('newVideo');
        $this->mount();

        $this->dispatchEventBrowser('postStored');
    }

    public function upload()
    {
        try {
            $validatedData = $this->validate([
                'file' => 'required|file|mimes:jpeg,png,jpg,mp4,mov,wav,mp3,pdf,csv,xls,xlsx,zip|max:1048576',

                'newVideo.day' => 'required',
                'newVideo.views' => 'required',
                'newVideo.description' => 'required|min:10',
                'newVideo.likes' => 'required',
                'newVideo.link' => 'required',
            ]);

            $file = $this->file;
            $fileLink = $file->store('post-files', 'public');

            $validatedData['newVideo']['file'] = $fileLink;

            $this->createPostAndFile($validatedData);

            $this->reset('newVideo', 'photo');
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
        ModelsLatestVideos::create($validatedData['newVideo']);

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
        $this->selectedLatestVideosId = $id;
        $this->newVideo = ModelsLatestVideos::find($id)->toArray();
    }

    public function update()
    {
        $validatedData = $this->validate([

            'newVideo.day' => 'required',
            'newVideo.views' => 'required',
            'newVideo.description' => 'required|min:10',
            'newVideo.likes' => 'required',
            'newVideo.link' => 'required',
            'newVideo.file' => 'required|file|mimes:jpeg,png,jpg,mp4,mov,wav,mp3,pdf,csv,xls,xlsx,zip|max:1048576',
        ]);

        ModelsLatestVideos::where('id', $this->selectedLatestVideosId)->update($validatedData['newVideo']);

        $this->selectedLatestVideosId = null;
        $this->mount();

        $this->dispatchEventBrowser('postUpdated');
    }

    public function cancel()
    {
        $this->selectedLatestVideosId = null;
        $this->reset('newVideo');
    }

    public function toggleActive(int $id)
    {
        $video = ModelsLatestVideos::find($id);
        $video->update(['is_active' => !$video->is_active]);

        $this->mount();

        $this->dispatchEventBrowser('postToggled');
    }

    public function toggleshowVideos()
    {

        $this->showVideos = !$this->showVideos;

        if ($this->showVideos) {
            $this->videos = ModelsLatestVideos::orderBy('created_at', 'desc')->take(4)->get();
        } else {
            $this->videos = ModelsLatestVideos::orderBy('created_at', 'desc')->get();
        }

    }


    public function render()
    {
        return view('livewire.latest-videos');
    }
}
















