<?php

namespace App\Livewire;

use App\Models\LatestGallery as ModelsLatestGallery;
use Livewire\Component;

class LatestGallery extends Component
{

    public $mainPages;
    public $main_page_names = [];
    public $main_page_content,$latest_gallery_id;
    public $header_navigation_id;
    public $isOpen = 0;

    public function mount()
    {
        $this->mainPages =ModelsLatestGallery::all();
    }

    public function render()
    {
        return view(
            'livewire.latest-gallery',
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
        $this->latest_gallery_id = '';
    }

    public function store()
    {
        $this->validate([
            'header_navigation_id' => 'required',
            'main_page_name23' => 'required',
            'main_page_name24' => 'required',
            'main_page_name25' => 'required',
            'main_page_name81' => 'required',
            'main_page_name59' => 'required',
            'main_page_name60' => 'required',
            'main_page_content' => 'required',
        ]);

        ModelsLatestGallery::updateOrCreate(['id' => $this->latest_gallery_id], [
            'main_page_name23' => $this->main_page_name[23],
            'main_page_name24' => $this->main_page_name[24],
            'main_page_name25' => $this->main_page_name[25],
            'main_page_name81' => $this->main_page_name[81],
            'main_page_name59' => $this->main_page_name[59],
            'main_page_name60' => $this->main_page_name[60],
            'main_page_content' => $this->main_page_content
        ]);

        session()->flash(
            'message',
            $this->latest_gallery_id ? 'Page Updated Successfully.' : 'Page Created Successfully.'
        );

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $page = ModelsLatestGallery::findOrFail($id);
        $this->main_page_names = [
            $page->main_page_name23,
            $page->main_page_name24,
            $page->main_page_name25,
            $page->main_page_name81,
            $page->main_page_name59,
            $page->main_page_name60,
        ];
        $this->main_page_content = $page->main_page_content;
        $this->latest_gallery_id = $page->id;
        $this->header_navigation_id = $page->id;

        $this->openModal();
    }

    public function delete($id)
    {
        ModelsLatestGallery::find($id)->delete();
        session()->flash('message', 'Page Deleted Successfully.');
    }
}
