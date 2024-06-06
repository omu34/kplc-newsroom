<?php

namespace App\Livewire;

use Livewire\Component;

class SingleVideosList extends Component
{
    public $selectedVideoIndex = 0;
    public $showModal = false;

    public $videos = [
        // Array of Video image URLs
        'https://images.unsplash.com/photo-1593941707882-a5bba14938c7?q=80&w=2672&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
        'https://images.unsplash.com/photo-1617886322168-72b886573c35?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
        'https://images.unsplash.com/photo-1608023465482-bcb34e3da93c?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
        // Add more image URLs as needed
    ];

    public function render()
    {
        return view('livewire.single-videos-list');
    }

    public function selectVideo($index)
    {
        $this->selectedVideoIndex = $index;
        $this->showModal = true;
    }

    public function nextVideo()
    {
        $this->selectedVideoIndex = ($this->selectedVideoIndex + 1) % count($this->videos);
    }

    public function previousVideo()
    {
        $this->selectedVideoIndex = ($this->selectedVideoIndex - 1 + count($this->videos)) % count($this->videos);
    }

    public function closePopup()
    {
        $this->showModal = false;
    }
}
