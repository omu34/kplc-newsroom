<?php

namespace App\Livewire;



use App\Models\LatestVideos as ModelsLatestVideos;
use Livewire\Component;
class LatestVideos extends Component
{
    public $mainPages;
    public $main_page_names = [
        'main_page_name11' => '',
        'main_page_name60' => '',
        'main_page_name66' => '',
        'main_page_name67' => '',
        'main_page_name68' => '',
        'main_page_name69' => '',
        'main_page_name70' => '',
    ];
    public $main_page_content, $latest_videos_id;
    public $header_navigation_id;
    public $isOpen = false;

    public function mount()
    {
        $this->mainPages = ModelsLatestVideos::all();
    }

    public function render()
    {
        return view('livewire.latest-videos', [
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
        'main_page_name11' => '',
        'main_page_name60' => '',
        'main_page_name66' => '',
        'main_page_name67' => '',
        'main_page_name68' => '',
        'main_page_name69' => '',
        'main_page_name70' => '',
        ];
        $this->main_page_content = '';
        $this->latest_videos_id = '';
        $this->header_navigation_id = '';
    }

    public function store()
    {
        $this->validate([
            'header_navigation_id' => 'required',
            'main_page_names.main_page_name11' => 'required',
            'main_page_names.main_page_name60' => 'required',
            'main_page_names.main_page_name66' => 'required',
            'main_page_names.main_page_name67' => 'required',
            'main_page_names.main_page_name68' => 'required',
            'main_page_names.main_page_name69' => 'required',
            'main_page_names.main_page_name70' => 'required',
            'main_page_image88' => 'required|image|max:1024',
            'main_page_image87' => 'required|image|max:1024',
            'main_page_content' => 'required',
        ]);

        $imagePath = $this->main_page_image88->store('public/images');
        $imagePath = $this->main_page_image87->store('public/images');


        ModelsLatestVideos::updateOrCreate(['id' => $this->latest_videos_id], [
            'main_page_name11' => $this->main_page_names['main_page_name11'],
            'main_page_name60' => $this->main_page_names['main_page_name60'],
            'main_page_name66' => $this->main_page_names['main_page_name66'],
            'main_page_name67' => $this->main_page_names['main_page_name67'],
            'main_page_name68' => $this->main_page_names['main_page_name68'],
            'main_page_name69' => $this->main_page_names['main_page_name69'],
            'main_page_name70' => $this->main_page_names['main_page_name70'],
            'main_page_image88' => str_replace('public/', '', $imagePath),
            'main_page_image87' => str_replace('public/', '', $imagePath),
            'main_page_content' => $this->main_page_content,
            'header_navigation_id' => $this->header_navigation_id,
        ]);

        session()->flash(
            'message',
            $this->latest_videos_id ? 'Page Updated Successfully.' : 'Page Created Successfully.'
        );

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $page = ModelsLatestVideos::findOrFail($id);
        $this->main_page_names = [
            'main_page_name11' => $page->main_page_name11,
            'main_page_name60' => $page->main_page_name60,
            'main_page_name66' => $page->main_page_name66,
            'main_page_name67' => $page->main_page_name67,
            'main_page_name68' => $page->main_page_name68,
            'main_page_name69' => $page->main_page_name69,
            'main_page_name70' => $page->main_page_name70,
            'main_page_name88' => $page->main_page_image88,
            'main_page_name87' => $page->main_page_image87,
        ];
        $this->main_page_content = $page->main_page_content;
        $this->latest_videos_id = $page->id;
        $this->header_navigation_id = $page->header_navigation_id;

        $this->openModal();
    }

    public function delete($id)
    {
        ModelsLatestVideos::find($id)->delete();
        session()->flash('message', 'Page Deleted Successfully.');
    }
}
















