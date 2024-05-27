<?php

namespace App\Livewire;

use App\Models\LatestNews as ModelsLatestNews;
use Livewire\Component;

class LatestNews extends Component
{


    public $mainPages;
    public $main_page_names = [];
    public $main_page_content, $latest_news_id;
    public $header_navigation_id;
    public $isOpen = 0;

    public function mount()
    {
        $this->mainPages = ModelsLatestNews::all();
    }

    public function render()
    {
        return view(
            'livewire.latest-news',
            ['mainPages' => $this->mainPages,]
        );
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
        $this->main_page_names = array_fill(0, 20, ''); // Assuming we need 4 names
        $this->main_page_content = '';
        $this->latest_news_id = '';
    }

    public function store()
    {
        $this->validate([
            'header_navigation_id' => 'required',
            'main_page_name60' => 'required',
            'main_page_name61' => 'required',
            'main_page_name62' => 'required',
            'main_page_name63' => 'required',
            'main_page_name64' => 'required',
            'main_page_name65' => 'required',
            'main_page_content' => 'required',
        ]);

        ModelsLatestNews::updateOrCreate(['id' => $this->latest_news_id], [
            'main_page_name60' => $this->main_page_name[60],
            'main_page_name61' => $this->main_page_name[61],
            'main_page_name62' => $this->main_page_name[62],
            'main_page_name63' => $this->main_page_name[63],
            'main_page_name64' => $this->main_page_name[64],
            'main_page_name65' => $this->main_page_name[65],
            'main_page_content' => $this->main_page_content
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
            $page->main_page_name60,
            $page->main_page_name61,
            $page->main_page_name62,
            $page->main_page_name63,
            $page->main_page_name64,
            $page->main_page_name65,

        ];
        $this->main_page_content = $page->main_page_content;
        $this->latest_news_id = $page->id;
        $this->header_navigation_id = $page->id;

        $this->openModal();
    }

    public function delete($id)
    {
        ModelsLatestNews::find($id)->delete();
        session()->flash('message', 'Page Deleted Successfully.');
    }
}
