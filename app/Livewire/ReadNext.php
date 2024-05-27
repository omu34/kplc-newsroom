<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ReadNext as ModelsReadNext;

class ReadNext extends Component
{


    public $mainPages;
    public $main_page_names = [];
    public $main_page_content;
    public $main_page_id;
    public $isOpen = 0;

    public function mount()
    {
        $this->mainPages = ModelsReadNext::all();
    }

    public function render()
    {
        return view(
            'livewire.read-next',
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
        $this->main_page_id = '';
    }

    public function store()
    {
        $this->validate([
            'main_page_id' => 'required',
            'main_page_name60' => 'required',
            'main_page_name75' => 'required',
            'main_page_name76' => 'required',
            'main_page_name77' => 'required',
            'main_page_name78' => 'required',
            'main_page_name79' => 'required',

            'main_page_content' => 'required',
        ]);

        ModelsReadNext::updateOrCreate(['id' => $this->main_page_id], [
            'main_page_name60' => $this->main_page_name[60],
            'main_page_name75' => $this->main_page_name[75],
            'main_page_name76' => $this->main_page_name[76],
            'main_page_name77' => $this->main_page_name[77],
            'main_page_name78' => $this->main_page_name[78],
            'main_page_name79' => $this->main_page_name[79],

            'main_page_content' => $this->main_page_content
        ]);

        session()->flash(
            'message',
            $this->main_page_id ? 'Page Updated Successfully.' : 'Page Created Successfully.'
        );

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $page = ModelsReadNext::findOrFail($id);
        $this->main_page_names = [
            $page->main_page_name60,
            $page->main_page_name75,
            $page->main_page_name76,
            $page->main_page_name77,
            $page->main_page_name78,
            $page->main_page_name79,

        ];
        $this->main_page_content = $page->main_page_content;
        $this->main_page_id = $page->id;

        $this->openModal();
    }

    public function delete($id)
    {
        ModelsReadNext::find($id)->delete();
        session()->flash('message', 'Page Deleted Successfully.');
    }
}
