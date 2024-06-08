<?php

namespace App\Livewire;

use Livewire\Component;

class SingleGalleryList extends Component
{
    public $selectedGalleryIndex = 0;
    public $showModal = false;

    public $galleries = [
        // Array of Gallery image URLs
        'https://images.unsplash.com/photo-1593941707882-a5bba14938c7?q=80&w=2672&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
        'https://images.unsplash.com/photo-1617886322168-72b886573c35?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
        'https://images.unsplash.com/photo-1608023465482-bcb34e3da93c?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
        // Add more image URLs as needed
    ];

    public function render()
    {
        return view('livewire.single-gallery-list');
    }

    public function selectGallery($index)
    {
        $this->selectedGalleryIndex = $index;
        $this->showModal = true;
    }

    public function nextGallery()
    {
        $this->selectedGalleryIndex = ($this->selectedGalleryIndex + 1) % count($this->galleries);
    }

    public function previousGallery()
    {
        $this->selectedGalleryIndex = ($this->selectedGalleryIndex - 1 + count($this->galleries)) % count($this->galleries);
    }

    public function closePopup()
    {
        $this->showModal = false;
    }
}
