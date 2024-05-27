<?php

namespace App\Livewire;

use App\Models\BasicBanner as ModelsBasicBanner;
use Livewire\Component;


class BasicBanner extends Component
{
    public $mainPages;
    public $main_page_names = [];
    public $main_page_content, $basic_banner_id;
    public $header_navigation_id;
    public $isOpen = 0;

    public function mount()
    {
        $this->mainPages = ModelsBasicBanner::all();
    }

    public function render()
    {
        return view('livewire.basic-banner', [
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
        $this->basic_banner_id = '';
    }

    public function store()
    {
        $this->validate([
            'header_navigation_id' => 'required',
            'main_page_name13' => 'required',
            'main_page_content' => 'required',
        ]);

        ModelsBasicBanner::updateOrCreate(['id' => $this->basic_banner_id], [

            'main_page_name13' => $this->main_page_name13,
            'main_page_content' => $this->main_page_content
        ]);

        session()->flash(
            'message',
            $this->basic_banner_id ? 'Page Updated Successfully.' : 'Page Created Successfully.'
        );

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $page = ModelsBasicBanner::findOrFail($id);
        $this->main_page_names = [
            $page->main_page_name13
        ];
        $this->main_page_content = $page->main_page_content;
        $this->basic_banner_id = $page->id;
        $this->header_navigation_id= $page->id;
        $this->openModal();
    }

    public function delete($id)
    {
        ModelsBasicBanner::find($id)->delete();
        session()->flash('message', 'Page Deleted Successfully.');
    }
}
