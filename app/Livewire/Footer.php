<?php

namespace App\Livewire;

// use App\Models\Currency;
use App\Models\Footer as ModelsFooter;
// use App\Models\QuickLinks;
use Livewire\Component;
use App\Models\Socials as ModelsSocials;

class Footer extends Component
{
    public $socials;
    // public $quicklinks;
    public $mainPages;
    // public $currencys;
    public $main_page_name = [];
    public $main_page_content,$footer_id;
    public $header_navigation_id;
    public $isOpen = 0;

    public function mount()
    {
        $this->mainPages = ModelsFooter::all();
        // $this->quicklinks = QuickLinks::all();
        $this->socials = ModelsSocials::all();
        // $this->currencys = Currency::all();
    }



    public function render()
    {
        return view('livewire.footer', [
            'mainPages' => $this->mainPages,
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
        $this->main_page_name = array_fill(0, 20, ''); // Assuming we need 4 names
        $this->main_page_content = '';
        $this->footer_id = '';
    }

    public function store()
    {
        $this->validate([
            'header_navigation_id' => 'required',
            'main_page_name30' => 'required',
            'main_page_name31' => 'required',
            'main_page_name32' => 'required',
            'main_page_name33' => 'required',
            'main_page_name34' => 'required',
            'main_page_name35' => 'required',
            'main_page_name36' => 'required',
            'main_page_name37' => 'required',
            'main_page_name38' => 'required',
            'main_page_name39' => 'required',
            'main_page_name40' => 'required',
            'main_page_name41' => 'required',
            'main_page_name42' => 'required',
            'main_page_name43' => 'required',
            'main_page_name44' => 'required',
            'main_page_name45' => 'required',
            'main_page_name46' => 'required',
            'main_page_name47' => 'required',
            'main_page_name48' => 'required',
            'main_page_name49' => 'required',
            'main_page_name50' => 'required',
            'main_page_name51' => 'required',
            'main_page_name52' => 'required',
            'main_page_name53' => 'required',
            'main_page_name54' => 'required',
            'main_page_name55' => 'required',
            'main_page_name56' => 'required',
            'main_page_name57' => 'required',
            'main_page_name58' => 'required',
            'main_page_name71' => 'required',
            'main_page_name72' => 'required',
            'main_page_content' => 'required',
        ]);

        ModelsFooter::updateOrCreate(['id' => $this->footer_id], [
            'main_page_name30' => $this->main_page_name[30],
            'main_page_name31' => $this->main_page_name[31],
            'main_page_name32' => $this->main_page_name[32],
            'main_page_name33' => $this->main_page_name[33],
            'main_page_name34' => $this->main_page_name[34],
            'main_page_name35' => $this->main_page_name[35],
            'main_page_name36' => $this->main_page_name[36],
            'main_page_name37' => $this->main_page_name[37],
            'main_page_name38' => $this->main_page_name[38],
            'main_page_name39' => $this->main_page_name[39],
            'main_page_name40' => $this->main_page_name[40],
            'main_page_name41' => $this->main_page_name[41],
            'main_page_name42' => $this->main_page_name[42],
            'main_page_name43' => $this->main_page_name[43],
            'main_page_name44' => $this->main_page_name[44],
            'main_page_name45' => $this->main_page_name[45],
            'main_page_name46' => $this->main_page_name[46],
            'main_page_name47' => $this->main_page_name[47],
            'main_page_name48' => $this->main_page_name[48],
            'main_page_name49' => $this->main_page_name[49],
            'main_page_name50' => $this->main_page_name[50],
            'main_page_name51' => $this->main_page_name[51],
            'main_page_name52' => $this->main_page_name[52],
            'main_page_name53' => $this->main_page_name[53],
            'main_page_name54' => $this->main_page_name[54],
            'main_page_name55' => $this->main_page_name[55],
            'main_page_name56' => $this->main_page_name[56],
            'main_page_name57' => $this->main_page_name[57],
            'main_page_name58' => $this->main_page_name[58],
            'main_page_name71' => $this->main_page_name[71],
            'main_page_name72' => $this->main_page_name[72],
            'main_page_content' => $this->main_page_content
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
        $page = ModelsFooter::findOrFail($id);
        $this->main_page_name = [
            $page->main_page_name30,
            $page->main_page_name31,
            $page->main_page_name32,
            $page->main_page_name33,
            $page->main_page_name34,
            $page->main_page_name35,
            $page->main_page_name36,
            $page->main_page_name37,
            $page->main_page_name38,
            $page->main_page_name39,
            $page->main_page_name40,
            $page->main_page_name41,
            $page->main_page_name42,
            $page->main_page_name43,
            $page->main_page_name44,
            $page->main_page_name45,
            $page->main_page_name46,
            $page->main_page_name47,
            $page->main_page_name48,
            $page->main_page_name49,
            $page->main_page_name50,
            $page->main_page_name51,
            $page->main_page_name52,
            $page->main_page_name53,
            $page->main_page_name54,
            $page->main_page_name55,
            $page->main_page_name56,
            $page->main_page_name57,
            $page->main_page_name58,
            $page->main_page_name71,
            $page->main_page_name72,


        ];
        $this->main_page_content = $page->main_page_content;
        $this->footer_id = $page->id;
        $this->header_navigation_id = $page->id;

        $this->openModal();
    }

    public function delete($id)
    {
        ModelsFooter::find($id)->delete();
        session()->flash('message', 'Page Deleted Successfully.');
    }
}
