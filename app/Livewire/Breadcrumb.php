<?php

namespace App\Livewire;

use App\Models\Breadcrumb as ModelsBreadcrumb;
use Livewire\Component;
class Breadcrumb extends Component
{
    public $mainPages;
    public $main_page_names = [];
    public $main_page_content, $breadcrumb_id;
    public $header_navigation_id;
    public $isOpen = 0;

    public function mount()
    {
        $this->mainPages = ModelsBreadcrumb::all();
    }

    public function render()
    {
        return view('livewire.breadcrumb', [
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
        $this->breadcrumb_id = '';
    }

    public function store()
    {
        $this->validate([
            'header_navigation_id' => 'required',
            'main_page_name26' => 'required',
            'main_page_name27' => 'required',
            'main_page_name28' => 'required',
            'main_page_content' => 'required',
        ]);

        ModelsBreadcrumb::updateOrCreate(['id' => $this->breadcrumb_id], [
            'main_page_name26' => $this->main_page_name26,
            'main_page_name27' => $this->main_page_name27,
            'main_page_name28' => $this->main_page_name28,


            'main_page_content' => $this->main_page_content
        ]);

        session()->flash(
            'message',
            $this->breadcrumb_id ? 'Page Updated Successfully.' : 'Page Created Successfully.'
        );

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $page = ModelsBreadcrumb::findOrFail($id);
        $this->main_page_names = [
            $page->main_page_name26,
            $page->main_page_name27,
            $page->main_page_name28,
        ];
        $this->main_page_content = $page->main_page_content;
        $this->breadcrumb_id = $page->id;
        $this->header_navigation_id = $page->id;

        $this->openModal();
    }

    public function delete($id)
    {
        ModelsBreadcrumb::find($id)->delete();
        session()->flash('message', 'Page Deleted Successfully.');
    }
}
