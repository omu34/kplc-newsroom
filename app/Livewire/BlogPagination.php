<?php

// namespace App\Livewire;

// use Livewire\Component;
// use Livewire\WithPagination;
// use App\Models\Blog;

// class BlogPagination extends Component
// {
//     use WithPagination;

//     public $featuredNewsId;

//     protected $paginationTheme = 'bootstrap';

//     public function mount($featuredNewsId)
//     {
//         $this->featuredNewsId = $featuredNewsId;
//     }

//     public function render()
//     {
//         $blogs = Blog::where('featured_news_id', $this->featuredNewsId)
//             ->orderBy('created_at', 'desc')
//             ->paginate(4);

//         return view('livewire.blog-pagination', ['blogs' => $blogs]);
//     }
// }
