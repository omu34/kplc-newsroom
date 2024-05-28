<?php

namespace App\Livewire;

use App\Models\LatestNews as ModelsLatestNews;
use Livewire\Component;

class LatestNews extends Component
{


    public $mainPages;
    public $main_page_names = [
        'main_page_name60' => '',
        'main_page_name61' => '',
        'main_page_name62' => '',
        'main_page_name63' => '',
        'main_page_name64' => '',
        'main_page_name65' => '',

    ];
    public $main_page_content, $latest_news_id;
    public $header_navigation_id;
    public $isOpen = false;


    public function mount()
    {
        $this->mainPages = ModelsLatestNews::all();
    }

    public function render()
    {
        return view('livewire.latest-news', [
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
            'main_page_name60' => '',
            'main_page_name61' => '',
            'main_page_name62' => '',
            'main_page_name63' => '',
            'main_page_name64' => '',
            'main_page_name65' => '',
        ];
        $this->main_page_content = '';
        $this->latest_news_id = '';
        $this->header_navigation_id = '';
    }

    public function store()
    {
        $this->validate([
            'header_navigation_id' => 'required',
            'main_page_names.main_page_name60' => 'required',
            'main_page_names.main_page_name61' => 'required',
            'main_page_names.main_page_name62' => 'required',
            'main_page_names.main_page_name63' => 'required',
            'main_page_names.main_page_name64' => 'required',
            'main_page_names.main_page_name65' => 'required',
            'main_page_image91' => 'required|image|max:1024',
            'main_page_image92' => 'required|image|max:1024',
            'main_page_content' => 'required',
        ]);

        $imagePath = $this->main_page_image91->store('public/images');
        $imagePath = $this->main_page_image92->store('public/images');


        ModelsLatestNews::updateOrCreate(['id' => $this->latest_news_id], [
            'main_page_name60' => $this->main_page_names['main_page_name60'],
            'main_page_name61' => $this->main_page_names['main_page_name61'],
            'main_page_name62' => $this->main_page_names['main_page_name62'],
            'main_page_name63' => $this->main_page_names['main_page_name63'],
            'main_page_name64' => $this->main_page_names['main_page_name64'],
            'main_page_name65' => $this->main_page_names['main_page_name65'],
            'main_page_image91' => str_replace('public/', '', $imagePath),
            'main_page_image92' => str_replace('public/', '', $imagePath),
            'main_page_content' => $this->main_page_content,
            'header_navigation_id' => $this->header_navigation_id,
        ]);

        session()->flash(
            'message',
            $this->latest_news_id ? 'Page Updated Successfully.' : 'Page Created Successfully.'
        );

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $page = ModelsLatestNews::findOrFail($id);
        $this->main_page_names = [
            'main_page_name60' => $page->main_page_name60,
            'main_page_name61' => $page->main_page_name61,
            'main_page_name62' => $page->main_page_name62,
            'main_page_name63' => $page->main_page_name63,
            'main_page_name64' => $page->main_page_name64,
            'main_page_name65' => $page->main_page_name65,

            'main_page_image91' => $page->main_page_image91,
            'main_page_image92' => $page->main_page_image92,
        ];
        $this->main_page_content = $page->main_page_content;
        $this->latest_news_id = $page->id;
        $this->header_navigation_id = $page->header_navigation_id;

        $this->openModal();
    }

    public function delete($id)
    {
        ModelsLatestNews::find($id)->delete();
        session()->flash('message', 'Page Deleted Successfully.');
    }
}
