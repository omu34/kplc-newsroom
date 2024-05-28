<?php

namespace App\Livewire;

use App\Models\HeaderNavigation as ModelsHeaderNavigation;
use Livewire\Component;

class HeaderNavigation extends Component
{
    public $mainPages;
    public $main_page_names = [];
    public $main_page_content;
    public $main_page_image82;
    public $main_page_image83;
    public $header_navigation_id;
    public $isOpen = 0;

    public function mount()
    {
        $this->mainPages = ModelsHeaderNavigation::all();
    }

    public function render()
    {
        return view('livewire.header-navigation', [
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
        $this->main_page_names = array_fill(0, 20, ''); // Assuming we need 4 names
        $this->main_page_content = '';
        $this->main_page_image82 = null;
        $this->main_page_image83 = null;
        $this->header_navigation_id = '';
    }

    public function store()
    {
        $this->validate([
            // 'header_navigation_id' => 'required',
            'main_page_name1' => 'required',
            'main_page_name2' => 'required',
            'main_page_name3' => 'required',
            'main_page_name4' => 'required',
            'main_page_name5' => 'required',
            'main_page_name6' => 'required',
            'main_page_name7' => 'required',
            'main_page_name8' => 'required',
            'main_page_name9' => 'required',
            'main_page_name10' => 'required',
            'main_page_name12' => 'required',
            'main_page_name19' => 'required',
            'main_page_image82' => 'required|image|max:1024',
            'main_page_image83' => 'required|image|max:1024',
            'main_page_content' => 'required',
        ]);
        $imagePath = $this->main_page_image82->store('public/images');
        $imagePath = $this->main_page_image83->store('public/images');

        ModelsHeaderNavigation::updateOrCreate(['id' => $this->header_navigation_id], [
            'main_page_name1' => $this->main_page_name1,
            'main_page_name2' => $this->main_page_name2,
            'main_page_name3' => $this->main_page_name3,
            'main_page_name4' => $this->main_page_name4,
            'main_page_name5' => $this->main_page_name5,
            'main_page_name6' => $this->main_page_name6,
            'main_page_name7' => $this->main_page_name7,
            'main_page_name8' => $this->main_page_name8,
            'main_page_name9' => $this->main_page_name9,
            'main_page_name10' => $this->main_page_name10,
            'main_page_name12' => $this->main_page_name12,
            'main_page_name19' => $this->main_page_name19,
            'main_page_image82' => str_replace('public/', '', $imagePath),
            'main_page_image83' => str_replace('public/', '', $imagePath),
            'main_page_content' => $this->main_page_content
        ]);

        session()->flash(
            'message',
            $this->header_navigation_id ? 'Page Updated Successfully.' : 'Page Created Successfully.'
        );

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $page = ModelsHeaderNavigation::findOrFail($id);
        $this->main_page_names = [
            $page->main_page_name1,
            $page->main_page_name2,
            $page->main_page_name3,
            $page->main_page_name4,
            $page->main_page_name5,
            $page->main_page_name6,
            $page->main_page_name7,
            $page->main_page_name8,
            $page->main_page_name9,
            $page->main_page_name10,
            $page->main_page_name12,
            $page->main_page_name19,
            $page->main_page_image82,
            $page->main_page_image83,
        ];
        $this->main_page_content = $page->main_page_content;
        $this->header_navigation_id = $page->id;

        $this->openModal();
    }

    public function delete($id)
    {
        ModelsHeaderNavigation::find($id)->delete();
        session()->flash('message', 'Page Deleted Successfully.');
    }
}






