<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Tags as ModelsTags;

class Tags extends Component
{

    public $mainPages;
    public $main_page_names = [];
    public $main_page_content, $tags_id;
    public $header_navigation_id;
    public $isOpen = 0;

    public function mount()
    {
        $this->mainPages = ModelsTags::all();
    }

    public function render()
    {
        return view(
            'livewire.tags',
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
        $this->tags_id = '';
    }

    public function store()
    {
        $this->validate([
            'header_navigation_id' => 'required',
            'main_page_name71' => 'required',
            'main_page_name72' => 'required',
            'main_page_content' => 'required',
        ]);

        ModelsTags::updateOrCreate(['id' => $this->tags_id], [
            'main_page_name71' => $this->main_page_name[71],
            'main_page_name72' => $this->main_page_name[72],
            'main_page_content' => $this->main_page_content
        ]);

        session()->flash(
            'message',
            $this->tags_id ? 'Page Updated Successfully.' : 'Page Created Successfully.'
        );

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $page = ModelsTags::findOrFail($id);
        $this->main_page_names = [
            $page->main_page_name71,
            $page->main_page_name72,
        ];
        $this->main_page_content = $page->main_page_content;
        $this->tags_id = $page->id;
        $this->header_navigation_id = $page->id;

        $this->openModal();
    }

    public function delete($id)
    {
        ModelsTags::find($id)->delete();
        session()->flash('message', 'Page Deleted Successfully.');
    }
}
