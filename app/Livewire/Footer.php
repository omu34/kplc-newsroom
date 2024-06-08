<?php

namespace App\Livewire;

// use App\Models\Currency;
use App\Models\Footer as ModelsFooter;
// use App\Models\QuickLinks;
use Livewire\Component;
use App\Models\Social as ModelsSocial;

class Footer extends Component
{
    public $socials;
    // public $quicklinks;
    public $footers;
    // public $currencys;
    public $footer_name = [];
    public $footer_content,$footer_id;
    public $isOpen = 0;

    public function mount()
    {
        $this->footers = ModelsFooter::all();
        // $this->quicklinks = QuickLinks::all();
        $this->socials = ModelsSocial::all();
        // $this->currencys = Currency::all();
    }



    public function render()
    {
        return view('livewire.footer', [
            'footers' => $this->footers,
            // 'navigations' => $this->navigations,
            'socials' => $this->socials,
            // 'quicklinks' => $this->quicklinkss,

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
        $this->footer_name = array_fill(0, 20, ''); // Assuming we need 4 names
        $this->footer_content = '';
        $this->footer_id = '';
    }

    public function store()
    {
        $this->validate([

            'footer1' => 'required',
            'footer2' => 'required',

            'footer_content' => 'required',
        ]);

        ModelsFooter::updateOrCreate(['id' => $this->footer_id], [
            'footer1' => $this->footer1,
            'footer2' => $this->footer2,
            'footer_content' => $this->footer_content
        ]);

        session()->flash(
            'message',
            $this->footer_id ? 'Page Updated Successfully.' : 'Page Created Successfully.'
        );

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $footer = ModelsFooter::findOrFail($id);
        $this->footer_name = [

            $footer->footer1,
            $footer->footer2,



        ];
        $this->footer_content = $footer->footer_content;
        $this->footer_id = $footer->id;

        $this->openModal();
    }

    public function delete($id)
    {
        ModelsFooter::find($id)->delete();
        session()->flash('message', 'Page Deleted Successfully.');
    }
}











