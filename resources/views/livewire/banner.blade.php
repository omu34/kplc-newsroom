<div class="bg-gray-900">
    @foreach ($mainPages as $page)
    <header class="absolute inset-x-0 top-0 z-40">
        @livewire('header-navigation')
    </header>
    <div class="relative isolate overflow-hidden pt-14 lg:px-0 px-10">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0">
            <img src="{{asset('storage/' . $page->main_page_image84)  }}" alt="" class="h-full w-full object-cover">
            <div class="absolute inset-0 bg-black opacity-80"></div>
        </div>

        <!-- Content Container -->
        <div class="relative mx-auto max-w-7xl py-16 sm:py-24 lg:pt-44">
            <h1 data-aos="fade-left" data-aos-duration="1500" class="text-4xl my-6 font-bold text-white lg:py-0 py-5">
                {{ $page->main_page_name13 }}
            </h1>
        </div>
    </div>
    @endforeach
</div>
