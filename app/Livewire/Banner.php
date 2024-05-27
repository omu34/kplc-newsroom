<?php

namespace App\Livewire;

use App\Models\Banner as ModelsBanner;
use Livewire\Component;

class Banner extends Component
{
    public $mainPages;
    public $main_page_names = [];
    public $main_page_content, $banner_id;
    public $main_page_image84;
    public $header_navigation_id;
    public $isOpen = 0;

    public function mount()
    {
        $this->mainPages = ModelsBanner::all();
    }

    public function render()
    {
        return view('livewire.banner', [
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
        $this->main_page_names = array_fill(0, 1, ''); // Assuming we need 4 names
        $this->main_page_content = '';
        $this->main_page_image84 = null;
        $this->banner_id = '';
    }

    public function store()
    {
        $this->validate([
            '$header_navigation_id' => 'required',
            'main_page_name13' => 'required',
            'main_page_name15' => 'required',
            'main_page_name16' => 'required',
            'main_page_name17' => 'required',
            'main_page_name18' => 'required',
            'main_page_name19' => 'required',
            'main_page_name20' => 'required',
            'main_page_image84' => 'required|image|max:1024',
            'main_page_content' => 'required',
        ]);
        $imagePath = $this->main_page_image84->store('public/images');


        ModelsBanner::updateOrCreate(['id' => $this->banner_id], [
            'main_page_name13' => $this->main_page_name13,
            'main_page_name15' => $this->main_page_name15,
            'main_page_name16' => $this->main_page_name16,
            'main_page_name17' => $this->main_page_name17,
            'main_page_name18' => $this->main_page_name18,
            'main_page_name19' => $this->main_page_name19,
            'main_page_name20' => $this->main_page_name20,
            'main_page_image84' => str_replace('public/', '', $imagePath),
            'main_page_content' => $this->main_page_content
        ]);

        session()->flash('message',
            $this->banner_id ? 'Page Updated Successfully.' : 'Page Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $page = ModelsBanner::findOrFail($id);
        $this->main_page_names = [
            $page->main_page_name13,
            $page->main_page_name15,
            $page->main_page_name16,
            $page->main_page_name17,
            $page->main_page_name18,
            $page->main_page_name19,
            $page->main_page_name20,
            $page->main_page_image84,
        ];
        $this->main_page_content = $page->main_page_content;
        $this->banner_id = $page->id;
        $this->header_navigation_id = $page->id;

        $this->openModal();
    }

    public function delete($id)
    {
        ModelsBanner::find($id)->delete();
        session()->flash('message', 'Page Deleted Successfully.');
    }
}






















