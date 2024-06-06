<?php

// namespace App\Livewire;

// use App\Models\FeaturedNews as ModelsFeaturedNews;
// use Livewire\Component;

// class FeaturedNews extends Component
// {
//     public $mainPages;
//     public $main_page_names = [
//         'main_page_name12' => '',
//         'main_page_name16' => '',
//         'main_page_name17' => '',
//         'main_page_name18' => '',
//         'main_page_name29' => '',
//     ];
//     public $main_page_content, $featured_news_id;
//     public $header_navigation_id;
//     public $isOpen = false;

//     public function mount()
//     {
//         $this->mainPages = ModelsFeaturedNews::all();
//     }

//     public function render()
//     {
//         return view('livewire.featured-news', [
//             'mainPages' => $this->mainPages,
//         ]);
//     }

//     public function create()
//     {
//         $this->resetInputFields();
//         $this->openModal();
//     }

//     public function openModal()
//     {
//         $this->isOpen = true;
//     }

//     public function closeModal()
//     {
//         $this->isOpen = false;
//     }

//     private function resetInputFields()
//     {
//         $this->main_page_names = [
//             'main_page_name12' => '',
//             'main_page_name16' => '',
//             'main_page_name17' => '',
//             'main_page_name18' => '',
//             'main_page_name29' => '',
//         ];
//         $this->main_page_content = '';
//         $this->featured_news_id = '';
//         $this->header_navigation_id = '';
//     }

//     public function store()
//     {
//         $this->validate([
//             'header_navigation_id' => 'required',
//             'main_page_names.main_page_name12' => 'required',
//             'main_page_names.main_page_name16' => 'required',
//             'main_page_names.main_page_name17' => 'required',
//             'main_page_names.main_page_name18' => 'required',
//             'main_page_names.main_page_name29' => 'required',
//             'main_page_image83' => 'required|image|max:1024',
//             'main_page_image85' => 'required|image|max:1024',
//             'main_page_content' => 'required',
//         ]);

//         $imagePath = $this->main_page_image83->store('public/images');
//         $imagePath = $this->main_page_image85->store('public/images');


//         ModelsFeaturedNews::updateOrCreate(['id' => $this->featured_news_id], [
//             'main_page_name12' => $this->main_page_names['main_page_name12'],
//             'main_page_name16' => $this->main_page_names['main_page_name16'],
//             'main_page_name17' => $this->main_page_names['main_page_name17'],
//             'main_page_name18' => $this->main_page_names['main_page_name18'],
//             'main_page_name29' => $this->main_page_names['main_page_name29'],
//             'main_page_image83' => str_replace('public/', '', $imagePath),
//             'main_page_image85' => str_replace('public/', '', $imagePath),
//             'main_page_content' => $this->main_page_content,
//             'header_navigation_id' => $this->header_navigation_id,
//         ]);

//         session()->flash(
//             'message',
//             $this->featured_news_id ? 'Page Updated Successfully.' : 'Page Created Successfully.'
//         );

//         $this->closeModal();
//         $this->resetInputFields();
//     }

//     public function edit($id)
//     {
//         $page = ModelsFeaturedNews::findOrFail($id);
//         $this->main_page_names = [
//             'main_page_name12' => $page->main_page_name12,
//             'main_page_name16' => $page->main_page_name16,
//             'main_page_name17' => $page->main_page_name17,
//             'main_page_name18' => $page->main_page_name18,
//             'main_page_name29' => $page->main_page_name29,
//             'main_page_name83' => $page->main_page_image83,
//             'main_page_name85' => $page->main_page_image85,
//         ];
//         $this->main_page_content = $page->main_page_content;
//         $this->featured_news_id = $page->id;
//         $this->header_navigation_id = $page->header_navigation_id;

//         $this->openModal();
//     }

//     public function delete($id)
//     {
//         ModelsFeaturedNews::find($id)->delete();
//         session()->flash('message', 'Page Deleted Successfully.');
//     }
// }














namespace App\Livewire;

use Livewire\Component;
use App\Models\FeaturedNews as ModelsFeaturedNews;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\File;

class FeaturedNews extends Component
{
    use WithFileUploads;

    public $posts;
    public $selectedPostId;
    public $selectedPostIndex = 0;
    public $showModal = false;
    public $showPosts = false;
    public $newPost = [
        'main_page_name12' => '',
        'day' =>'',
        'views' => '',
        'description' => '',
        'likes' => '',
        'link' => '',
        'file' => '',
    ];


    public function mount()
    {
        $this->posts = ModelsFeaturedNews::orderBy('created_at', 'desc')->get();
    }

    public function store()
    {
        $validatedData = $this->validate([
            'main_page_name12' => 'required',
            'newPost.day' => 'required',
            'newPost.views' => 'required',
            'newPost.description' => 'required|min:10',
            'newPost.likes' => 'required',
            'newPost.link' => 'required',
            'newPost.file' => 'required|file|mimes:jpeg,png,jpg,mp4,mov,wav,mp3,pdf,csv,xls,xlsx,zip|max:1048576',

        ]);

        ModelsFeaturedNews::create($validatedData['newPost']);

        $this->reset('newPost');
        $this->mount();

        $this->dispatchEventBrowser('postStored');
    }

    public function upload()
    {
        try {
            $validatedData = $this->validate([
                'file' => 'required|file|mimes:jpeg,png,jpg,mp4,mov,wav,mp3,pdf,csv,xls,xlsx,zip|max:1048576',
                'main_page_name12' => 'required',
                'newPost.day' => 'required',
                'newPost.views' => 'required',
                'newPost.description' => 'required|min:10',
                'newPost.likes' => 'required',
                'newPost.link' => 'required',
            ]);

            $file = $this->file;
            $fileLink = $file->store('post-files', 'public');

            $validatedData['newPost']['file'] = $fileLink;

            $this->createPostAndFile($validatedData);

            $this->reset('newPost', 'photo');
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
        ModelsFeaturedNews::create($validatedData['newPost']);

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
        $this->selectedPostId = $id;
        $this->newPost = ModelsFeaturedNews::find($id)->toArray();
    }

    public function update()
    {
        $validatedData = $this->validate([
            'main_page_name12' => 'required',
            'newPost.day' => 'required',
            'newPost.views' => 'required',
            'newPost.description' => 'required|min:10',
            'newPost.likes' => 'required',
            'newPost.link' => 'required',
            'newPost.file' => 'required|file|mimes:jpeg,png,jpg,mp4,mov,wav,mp3,pdf,csv,xls,xlsx,zip|max:1048576',
        ]);

        ModelsFeaturedNews::where('id', $this->selectedPostId)->update($validatedData['newPost']);

        $this->selectedPostId = null;
        $this->mount();

        $this->dispatchEventBrowser('postUpdated');
    }

    public function cancel()
    {
        $this->selectedPostId = null;
        $this->reset('newPost');
    }

    public function toggleActive(int $id)
    {
        $post = ModelsFeaturedNews::find($id);
        $post->update(['is_active' => !$post->is_active]);

        $this->mount();

        $this->dispatchEventBrowser('postToggled');
    }

    public function toggleShowPosts()
    {

        $this->showPosts = !$this->showPosts;

        if ($this->showPosts) {
            $this->posts = ModelsFeaturedNews::orderBy('created_at', 'desc')->take(4)->get();
        } else {
            $this->posts = ModelsFeaturedNews::orderBy('created_at', 'desc')->get();
        }

    }





    public function selectPost($index)
    {
        $this->selectedPostIndex = $index;
        $this->showModal = true;
    }

    public function previousPost()
    {
        if ($this->selectedPostIndex > 0) {
            $this->selectedPostIndex--;
        }
    }

    public function nextPost()
    {
        if ($this->selectedPostIndex < $this->posts->count() - 1) {
            $this->selectedPostIndex++;
        }
    }

    public function closePopup()
    {
        $this->showModal = false;
    }

    public function render()
    {
        return view('livewire.featured-news');
    }
}
