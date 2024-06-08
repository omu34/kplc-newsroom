<?php

namespace App\Livewire;

use App\Models\FeaturedNews as ModelsFeaturedNews;
use Livewire\Component;
class FeaturedNews extends Component
{
    public $mainPages;
    public $main_page_names = [
        'main_page_name12' => '',
        'main_page_name16' => '',
        'main_page_name17' => '',
        'main_page_name18' => '',
        'main_page_name29' => '',
    ];
    public $main_page_content, $featured_news_id;
    public $header_navigation_id;
    public $isOpen = false;

    public function mount()
    {
        $this->mainPages = ModelsFeaturedNews::all();
    }

    public function render()
    {
        return view('livewire.featured-news', [
            'mainPages' => $this->mainPages,
        ]);
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    private function resetInputFields()
    {
        $this->main_page_names = [
            'main_page_name12' => '',
            'main_page_name16' => '',
            'main_page_name17' => '',
            'main_page_name18' => '',
            'main_page_name29' => '',
        ];
        $this->main_page_content = '';
        $this->featured_news_id = '';
        $this->header_navigation_id = '';
    }

    public function store()
    {
        $this->validate([
            'header_navigation_id' => 'required',
            'main_page_names.main_page_name12' => 'required',
            'main_page_names.main_page_name16' => 'required',
            'main_page_names.main_page_name17' => 'required',
            'main_page_names.main_page_name18' => 'required',
            'main_page_names.main_page_name29' => 'required',
            'main_page_image83' => 'required|image|max:1024',
            'main_page_image85' => 'required|image|max:1024',
            'main_page_content' => 'required',
        ]);

        $imagePath = $this->main_page_image83->store('public/images');
        $imagePath = $this->main_page_image85->store('public/images');


        ModelsFeaturedNews::updateOrCreate(['id' => $this->featured_news_id], [
            'main_page_name12' => $this->main_page_names['main_page_name12'],
            'main_page_name16' => $this->main_page_names['main_page_name16'],
            'main_page_name17' => $this->main_page_names['main_page_name17'],
            'main_page_name18' => $this->main_page_names['main_page_name18'],
            'main_page_name29' => $this->main_page_names['main_page_name29'],
            'main_page_image83' => str_replace('public/', '', $imagePath),
            'main_page_image85' => str_replace('public/', '', $imagePath),
            'main_page_content' => $this->main_page_content,
            'header_navigation_id' => $this->header_navigation_id,
        ]);

        session()->flash(
            'message',
            $this->featured_news_id ? 'Page Updated Successfully.' : 'Page Created Successfully.'
        );

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $page = ModelsFeaturedNews::findOrFail($id);
        $this->main_page_names = [
            'main_page_name12' => $page->main_page_name12,
            'main_page_name16' => $page->main_page_name16,
            'main_page_name17' => $page->main_page_name17,
            'main_page_name18' => $page->main_page_name18,
            'main_page_name29' => $page->main_page_name29,
            'main_page_name83' => $page->main_page_image83,
            'main_page_name85' => $page->main_page_image85,
        ];
        $this->main_page_content = $page->main_page_content;
        $this->featured_news_id = $page->id;
        $this->header_navigation_id = $page->header_navigation_id;

        $this->openModal();
    }

    public function delete($id)
    {
        ModelsFeaturedNews::find($id)->delete();
        session()->flash('message', 'Page Deleted Successfully.');
    }
}













// namespace App\Livewire;

// use Livewire\Component;
// use App\Models\LNews as ModelsLNews;

// class LatestNews extends Component
// {
//     public $news;
//     public $newLnews = [
//                 'link'=>'',
//         'day'=>'',
//        'views'=>'',
//        'link'=>'',
//         'description'=>'',
//         'likes'=>'',
//         'video_path'  => '',
//     ];
//     public $selectedLnewsId = null;
//     public $showLnews = false;

//     public function mount()
//     {
//         $this->news =LNews::all();
//     }


//     public function store()
//     {
//         $validatedData = $this->validate([
//                         'newLNews.link'=>'required',
//             'newLNews.day'=>'required',
//            'newLNews.views'=>'required',
//            'newLNews.link'=>'required',
//             'newLNews.description'=>'required',
//             'newLNews.likes'=>'required',
//             'newLNews.video_path'  => 'required',
//         ]);

//        LNews::create($validatedData['newLNews']);

//         $this->newLNews['link'] = '';
//         $this->newLNews['day'] = '';
//         $this->newLNews['views'] = '';
//         $this->newLNews['description'] = '';
//         $this->newLNews['likes'] = '';
//         $this->newLNews['video_path'] = '';
//         $this->news =LNews::all();

//         $this->emit('LatestNewstored');
//     }

//     public function edit(int $id)
//     {
//         $this->selectedLnewsId = $id;
//         $this->newLNews =LNews::find($id)->toArray();
//     }

//     public function update()
//     {
//         $validatedData = $this->validate([

//             'newLNews.link'=>'required',
//             'newLNews.day'=>'required',
//            'newLNews.views'=>'required',
//            'newLNews.link'=>'required',
//             'newLNews.description'=>'required',
//             'newLNews.likes'=>'required',
//             'newLNews.video_path'  => 'required',
//         ]);

//        LNews::where('id', $this->selectedLnewsId)->update($validatedData['newLNews']);

//         $this->selectedLnewsId = null;
//         $this->newLNews = [
//             'title' => '',
//             'content' => '',
//         ];
//         $this->news =LNews::all();

//         $this->dispatchEvent('postUpdated');
//     }

//     public function cancel()
//     {
//         $this->selectedLnewsId = null;
//         $this->newLNews = [
//             'title' => '',
//             'content' => '',
//         ];
//     }

//     public function toggleActive(int $id)
//     {
//         $post =LNews::find($id);
//         $post->update(['is_active' => !$post->is_active]);

//         $this->news =LNews::all();

//         $this->dispatchEvent('postToggled');
//     }

//     public function toggleShowLnews()
//     {
//         $this->showLnews = !$this->showLnews;
//     }

//     public function render()
//     {
//         return view('livewire.post-crud');
//     }
// }









