<?php

namespace App\Livewire;

use App\Models\Banner;
use App\Models\BasicBanner;
use App\Models\Breadcrumb;
use Livewire\Component;
use App\Models\Social;
use App\Models\QuickLink;
use App\Models\Footer;
use App\Models\Currency;
use App\Models\FeaturedNews;
use App\Models\LatestGallery;
use App\Models\LatestNews;
use App\Models\LatestVideos;
use App\Models\HeaderNavigation;
use App\Models\QuickLinks;
use App\Models\Socials;
use App\Models\Tags;
use App\Models\TopNavbar;

class GlobalSearch extends Component
{
    public $query;
    public $results;

    public function mount()
    {
        $this->query = '';
        $this->results = collect();
    }

    public function updatedQuery()
    {
        $this->search();
    }

    public function search()
    {
        $this->results = collect();

        if (strlen($this->query) > 2) {
            $socialResults = Socials::where('name', 'like', "%{$this->query}%")
                ->orWhere('url', 'like', "%{$this->query}%")
                ->get();
            $quickLinkResults = QuickLinks::where('name', 'like', "%{$this->query}%")
                ->orWhere('link', 'like', "%{$this->query}%")
                ->get();
            $footerResults = Footer::where('name', 'like', "%{$this->query}%")
                ->orWhere('content', 'like', "%{$this->query}%")
                ->get();
            $currencyResults = Currency::where('name', 'like', "%{$this->query}%")
                ->orWhere('code', 'like', "%{$this->query}%")
                ->get();
            $headerNavigationResults = HeaderNavigation::where('name', 'like', "%{$this->query}%")
                ->orWhere('label', 'like', "%{$this->query}%")
                ->get();
            $bannerResults = Banner::where('name', 'like', "%{$this->query}%")
                ->orWhere('url', 'like', "%{$this->query}%")
                ->get();
            $basicBannerResults = BasicBanner::where('name', 'like', "%{$this->query}%")
                ->orWhere('link', 'like', "%{$this->query}%")
                ->get();
            $footerResults = Footer::where('name', 'like', "%{$this->query}%")
                ->orWhere('content', 'like', "%{$this->query}%")
                ->get();
            $breadcrumbResults = Breadcrumb::where('name', 'like', "%{$this->query}%")
                ->orWhere('code', 'like', "%{$this->query}%")
                ->get();
            $featuredNewsResults = FeaturedNews::where('name', 'like', "%{$this->query}%")
                ->orWhere('label', 'like', "%{$this->query}%")
                ->get();
            $latestNewsResults = LatestNews::where('name', 'like', "%{$this->query}%")
                ->orWhere('url', 'like', "%{$this->query}%")
                ->get();
            $latestVideosResults = LatestVideos::where('name', 'like', "%{$this->query}%")
                ->orWhere('link', 'like', "%{$this->query}%")
                ->get();
            $latestGalleryResults = LatestGallery::where('name', 'like', "%{$this->query}%")
                ->orWhere('content', 'like', "%{$this->query}%")
                ->get();
            $tagsResults = Tags::where('name', 'like', "%{$this->query}%")
                ->orWhere('code', 'like', "%{$this->query}%")
                ->get();
            $topNavbarResults = TopNavbar::where('name', 'like', "%{$this->query}%")
                ->orWhere('label', 'like', "%{$this->query}%")
                ->get();

            $this->results = $this->results
            ->merge($bannerResults)
            ->merge($footerResults)
            ->merge($currencyResults)
            ->merge($headerNavigationResults)
            ->merge($basicBannerResults)
            ->merge($footerResults)
            ->merge($latestVideosResults)
            ->merge($breadcrumbResults)
            ->merge($latestNewsResults)
            ->merge($featuredNewsResults)
            ->merge($currencyResults)
            ->merge($tagsResults)
            ->merge($latestGalleryResults)
            ->merge($topNavbarResults);
            // ->merge($currencyResults)
            // ->merge($tagsResults)
            // ->merge($latestGalleryResults)
            // ->merge($topNavbarResults);
            // ->merge($currencyResults);
        }
    }

    public function render()
    {
        return view('livewire.global-search');
    }
}

