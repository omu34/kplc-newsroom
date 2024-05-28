<?php

namespace App\Livewire;

use App\Models\LatestGallery as ModelsLatestGallery;
use Livewire\Component;
class LatestGallery extends Component
{
    public $mainPages;
    public $main_page_names = [
        'main_page_name23' => '',
        'main_page_name24' => '',
        'main_page_name25' => '',
        'main_page_name59' => '',
        'main_page_name60' => '',
        'main_page_name81' => '',

    ];
    public $main_page_content, $latest_gallery_id;
    public $header_navigation_id;
    public $isOpen = false;

    public function mount()
    {
        $this->mainPages = ModelsLatestGallery::all();
    }

    public function render()
    {
        return view('livewire.latest-gallery', [
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
        'main_page_name23' => '',
        'main_page_name24' => '',
        'main_page_name25' => '',
        'main_page_name59' => '',
        'main_page_name60' => '',
        'main_page_name81' => '',
        ];
        $this->main_page_content = '';
        $this->latest_gallery_id = '';
        $this->header_navigation_id = '';
    }

    public function store()
    {
        $this->validate([
            'header_navigation_id' => 'required',
            'main_page_names.main_page_name23' => 'required',
            'main_page_names.main_page_name24' => 'required',
            'main_page_names.main_page_name25' => 'required',
            'main_page_names.main_page_name59' => 'required',
            'main_page_names.main_page_name60' => 'required',
            'main_page_names.main_page_name81' => 'required',
            'main_page_image89' => 'required|image|max:1024',
            'main_page_image90' => 'required|image|max:1024',
            'main_page_content' => 'required',
        ]);

        $imagePath = $this->main_page_image89->store('public/images');
        $imagePath = $this->main_page_image90->store('public/images');


        ModelsLatestGallery::updateOrCreate(['id' => $this->latest_gallery_id], [
            'main_page_name23' => $this->main_page_names['main_page_name23'],
            'main_page_name24' => $this->main_page_names['main_page_name24'],
            'main_page_name25' => $this->main_page_names['main_page_name25'],
            'main_page_name59' => $this->main_page_names['main_page_name59'],
            'main_page_name60' => $this->main_page_names['main_page_name60'],
            'main_page_name81' => $this->main_page_names['main_page_name81'],
            'main_page_image89' => str_replace('public/', '', $imagePath),
            'main_page_image90' => str_replace('public/', '', $imagePath),
            'main_page_content' => $this->main_page_content,
            'header_navigation_id' => $this->header_navigation_id,
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
            'main_page_name12' => $page->main_page_name12,
            'main_page_name16' => $page->main_page_name16,
            'main_page_name17' => $page->main_page_name17,
            'main_page_name18' => $page->main_page_name18,
            'main_page_name29' => $page->main_page_name29,
            'main_page_image89' => $page->main_page_image88,
            'main_page_image90' => $page->main_page_image90,
        ];
        $this->main_page_content = $page->main_page_content;
        $this->latest_gallery_id = $page->id;
        $this->header_navigation_id = $page->header_navigation_id;

        $this->openModal();
    }

    public function delete($id)
    {
        ModelsLatestGallery::find($id)->delete();
        session()->flash('message', 'Page Deleted Successfully.');
    }
}



















