<div>
    <div :class="{ 'sticky shadow-2': isSticky }" x-init="window.addEventListener('scroll', () => { isSticky = window.scrollY > 0 })" x-data="{ isOpen: false, isSticky: false, isSearchOpen: false }">
        @foreach ($headerNavigations as $header)

            <nav class="flex lg:hidden mx-auto max-w-7xl px-10 items-center bg-white dark:bg-gray-800 py-2 justify-between "
                aria-label="Global">
                <div class="flex lg:flex-1">
                    <a href="H" class="-m-1.5 p-1.5">
                        <span class="sr-only">
                            {{ $header->title19 }}
                        </span>
                        <img class="h-16 w-auto" {{--  src="/logo.svg "   --}} src="{{ asset('storage/' . $header->image) }}"
                            alt="">
                    </a>
                </div>
                <div class="flex lg:hidden gap-x-4">
                    <button @click="isSearchOpen = !isSearchOpen"
                        class="flex items-center justify-center w-10 h-10 bg-[#163466] rounded-full hover:bg-gray-300 focus:outline-none focus:ring-6 focus:ring-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 text-[#F9CC0B]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>
                    </button>

                    <button @click="isOpen = !isOpen" type="button"
                        class="-m-6.5 inline-flex items-center justify-center rounded-md p-6.5 text-gray-400 dark:text-white">
                        <span class="sr-only">Open main menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>

                </div>

                <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                    <button
                        class="flex items-center justify-center w-10 h-10 bg-[#163466] rounded-full hover:bg-gray-300 focus:outline-none focus:ring-6 focus:ring-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 text-[#F9CC0B]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>
                    </button>
                </div>
            </nav>

            <div :class="isSticky ? 'bg-[#163466] dark:bg-black py-4 mt-0' : 'mt-12'" class=" px-6">
                <nav class="lg:flex hidden mx-auto max-w-7xl items-center rounded-md justify-between " aria-label="Global">
                    <!-- loop category items -->
                    <div class="flex gap-x-12 ml-auto">
                        {{--  @php
                       ( $mainnavbars = \App\Models\MainNavbar::limit(4)->orderBy('created_at', 'desc')->get() as $index => $mainnavbar)
                       @endphp  --}}

                        <div class="hidden lg:flex lg:gap-x-12">

                            @foreach ($mainnavbars = \App\Models\MainNavbar::limit(4)->orderBy('created_at', 'desc')->get() as $index => $mainnavbar)
                                @if ($mainnavbar->link)
                                    <a href="{{ $mainnavbar->link }}" target='_blank'
                                        class="text-base dark:text-white hover:underline hover:underline-offset-4 font-normal text-white ">
                                        {{ $mainnavbar->name }}
                                    </a>
                                @endif
                            @endforeach
                        </div>

                        {{--  @foreach (App\Models\TopNavbar::limit(3)->orderBy('created_at', 'asc')->get() as $index => $topnavbar)
                            @if ($topnavbar->link)
                                <a href="{{ $topnavbar->link }}"
                                    class="flex text-base items-center text-gray-800 font-bold hover:text-gray-900 py-2 px-3">  --}}
                        {{--  @if ($link->image_path)
                                    <img src="{{ asset('storage/' . $link->image_path) }}" class="w-12 h-12 mr-3"
                                        alt="{{ $link->name . ' Image' }}">
                                @else
                                    <img src="{{ asset('placeholder-image.png') }}" class="w-12 h-12 mr-3"
                                        alt="Placeholder Image">
                                @endif  --}}
                        {{--  {{ $topnavbar->name }}
                                    @if ($topnavbar->description)
                                        <span class="text-sm text-gray-600 ml-2">{{ $topnavbars->description }}</span>
                                    @endif
                                </a>
                            @endif
                        @endforeach  --}}






                        {{--  <a href="#" data-aos="fade-left" data-aos-duration="1000" class="text-base hover:underline hover:underline-offset-4 font-normal leading-6 text-white">
                        {{ $header->title5 }}
                        Alternative Energy
                    </a>  --}}

                        {{--  <a href="{{ config('app.newsroom_base_url') }}/products/{{ $header->id }}"
                            class="text-base dark:text-white hover:underline hover:underline-offset-4 font-normal text-white">
                            {{ $header->title5 }}

                        </a>  --}}



                        {{--  <a href="{{ $header->link ?? $header->id }}"
                            class="text-base dark:text-white hover:underline hover:underline-offset-4 font-normal text-black">
                            {{ $header->title ?? 'Link Title' }}
                         </a>  --}}





                        {{--  <a href="#" data-aos="fade-left" data-aos-duration="1000" class="text-base hover:underline hover:underline-offset-4 font-normal leading-6 text-white">
                        {{ $header->title6 }}
                        Public
                    </a>  --}}

                        {{--  <a href="{{ config('app.newsroom_base_url') }}/public/{{ $header->id }}"
                            class="text-base dark:text-white hover:underline hover:underline-offset-4 font-normal text-black">
                        </a>  --}}



                        {{--  <a href="{{ $header->link ?? $header->id }}"
                            class="text-base dark:text-white hover:underline hover:underline-offset-4 font-normal text-black">
                            {{ $header->title ?? 'Link Title' }}
                         </a>  --}}
                        {{--  <a href="#" data-aos="fade-left" data-aos-duration="1000" class="text-base hover:underline hover:underline-offset-4 font-normal leading-6 text-white">
                        {{ $header->title7 }}
                        Stock Market
                    </a>  --}}

                        {{--  <a href="{{ config('app.newsroom_base_url') }}/stock-market/{{ $header->id }}"
                            class="text-base dark:text-white hover:underline hover:underline-offset-4 font-normal text-white">
                        {{ $header->title7 }} --}}
                        {{--  Product  --}}

                        {{--  </a>  --}}

                        <div class="flex items-center w-6 h-6 rounded-full relative" x-data="{ showAccessibility: false }" x-ref="access"
                            @mouseenter="showAccessibility = true" @mouseleave="showAccessibility = false"
                            x-init="$watch('showAccessibility', value => { if (value) { $dispatch('close-other-popups', $refs.access) } })">
                            <svg class="w-6 h-6 stroke-current dark:text-slate-100 text-slate-200 cursor-pointer"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none">
                                <path
                                    d="M10 4.5V18c0 1.08-.44 2.07-1.14 2.79l-.04.04c-.09.09-.19.18-.28.25-.3.26-.64.46-.99.6-.11.05-.22.09-.33.13-.39.13-.81.19-1.22.19-.27 0-.54-.03-.8-.08-.13-.03-.26-.06-.39-.1-.16-.05-.31-.1-.46-.17 0-.01 0-.01-.01 0-.28-.14-.55-.3-.8-.49l-.01-.01c-.13-.1-.25-.2-.36-.32-.11-.12-.22-.24-.33-.37-.19-.25-.35-.52-.49-.8.01-.01.01-.01 0-.01 0 0 0-.01-.01-.02-.06-.14-.11-.29-.16-.44a5.58 5.58 0 0 1-.1-.39c-.05-.26-.08-.53-.08-.8V4.5C2 3 3 2 4.5 2h3C9 2 10 3 10 4.5Z"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M22 16.5v3c0 1.5-1 2.5-2.5 2.5H6c.41 0 .83-.06 1.22-.19.11-.04.22-.08.33-.13.35-.14.69-.34.99-.6.09-.07.19-.16.28-.25l.04-.04 6.8-6.79h3.84c1.5 0 2.5 1 2.5 2.5ZM4.81 21.82c-.6-.18-1.17-.51-1.64-.99-.48-.47-.81-1.04-.99-1.64a4.02 4.02 0 0 0 2.63 2.63Z"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M18.37 11.29 15.66 14l-6.8 6.79C9.56 20.07 10 19.08 10 18V8.34l2.71-2.71c1.06-1.06 2.48-1.06 3.54 0l2.12 2.12c1.06 1.06 1.06 2.48 0 3.54ZM6 19a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div x-transition:enter="transition ease-in duration-200"
                                x-transition:enter-start="opacity-0 -translate-x-1"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:leave="transition ease-in duration-200"
                                x-transition:leave-start="opacity-100 translate-y-0"
                                x-transition:leave-end="opacity-0 -translate-x-1"
                                x-description="Flyout menu, show/hide based on flyout menu state" x-ref="panelAccess"
                                x-show="showAccessibility" aria-labelledby="modal-menuAccess" role="dialog"
                                aria-modal="true" x-cloak
                                class="absolute right-0 top-full z-30 w-screen max-w-52 overflow-hidden rounded-xl bg-white dark:bg-slate-900 shadow-lg">
                                <div class="p-4 flex flex-col gap-y-3 text-base font-sans">
                                    <div class="flex justify-between items-center">
                                        <div class="flex 1 dark:text-slate-200">

                                            {{ $header->title8 }}
                                            {{--  Light / Dark  --}}

                                        </div>
                                        <div class="w-11 h-6 flex-shrink-0">
                                            <x-theme-toggle />
                                        </div>
                                    </div>

                                    <div class="flex justify-between items-center cursor-pointer" @click="zoomLevel += 10">
                                        <div class="flex 1 dark:text-slate-200">

                                            {{ $header->title9 }}


                                        </div>
                                        <div class="w-7 h-7 flex-shrink-0">
                                            <svg class="w-7 h-7 stroke-current dark:text-slate-100 text-slate-500 cursor-pointer"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" fill="none">
                                                <path
                                                    d="M8 12h8M12 16V8M9 22h6c5 0 7-2 7-7V9c0-5-2-7-7-7H9C4 2 2 4 2 9v6c0 5 2 7 7 7Z"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                    </div>

                                    <div class="flex justify-between items-center cursor-pointer"
                                        @click="zoomLevel -= 10">
                                        <div class="flex 1 dark:text-slate-200">

                                            {{ $header->title10 }}
                                            {{--  Decrease Text  --}}


                                        </div>
                                        <div class="w-7 h-7 flex-shrink-0">
                                            <svg class="w-7 h-7 stroke-current dark:text-slate-100 text-slate-500 cursor-pointer"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" fill="none">
                                                <path
                                                    d="M8 12h8M9 22h6c5 0 7-2 7-7V9c0-5-2-7-7-7H9C4 2 2 4 2 9v6c0 5 2 7 7 7Z"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                    </div>

                                    <div class="flex justify-between items-center">
                                        <label class="flex 1 dark:text-slate-200 cursor-pointer" for="toggleGrayscale">
                                            <p x-text="siteGrayscale ? 'Grayscale: On' : 'Grayscale: Off'"></p>
                                        </label>
                                        <div class="w-7 h-7 flex items-center flex-shrink-0 text-right justify-center">
                                            <input class="rounded text-primary cursor-pointer w-5 h-5" type="checkbox"
                                                id="toggleGrayscale" x-model="siteGrayscale">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>



                    </div>
                </nav>
            </div>

            <div :class="{ 'shadow-2xl bg-white  dark:bg-black': isSticky }">
                <nav :class="isSticky ? 'mt-0 px-0 shadow' : 'mt-6 px-0'"
                    class="lg:flex hidden mx-auto  max-w-7xl items-center bg-white dark:bg-black  py-2 rounded-md justify-between px-6"
                    aria-label="Global">
                    <div class="flex lg:flex-4">
                        {{--  <a href="/" class="-m-1.5 p-1.5">
                            <span class="sr-only">{{ $header->title19 }}</span>
                            <img class="h-16 w-auto" src="{{ asset('storage/' . $header->main_page_image82) }}" alt="">
                        </a>  --}}
                    </div>


                    <div class="flex lg:flex-1">
                        {{--  @foreach (App\Models\QuickLinks::limit(3)->orderBy('created_at', 'asc')->get() as $index => $currencys)
                            @if ($currencys->code)
                                <a href="{{ $currencys->code }}"
                                    class="flex text-base items-center text-gray-800 font-bold hover:text-gray-900 py-2 px-3">
                                    @if ($currencys->image_path)
                                        <img src="{{ asset('storage/' . $currencys->image_path) }}"
                                            class="w-12 h-12 mr-3" alt="{{ $currencys->name . ' Image' }}">
                                    @else
                                        <img src="{{ asset('placeholder-image.png') }}" class="w-12 h-12 mr-3"
                                            alt="Placeholder Image">
                                    @endif
                                    {{ $currencys->name }}
                                </a>
                            @endif
                        @endforeach  --}}

                        <a href="/" class="-m-1.5 p-1.5">
                            <span class="sr-only">
                                {{ $header->title19 }}

                                {{--  Your Company  --}}

                            </span>
                            <img class="h-16 w-auto" src="{{ asset('storage/' . $header->image) }}" alt="">

                        </a>
                    </div>





                    <div class="flex lg:hidden">
                        <button @click="isOpen = !isOpen" type="button"
                            class="-m-6.5 inline-flex items-center justify-center rounded-md p-6.5 text-gray-400">
                            <span class="sr-only">
                                {{ $header->title12 }}
                                {{--  Open main menu  --}}

                            </span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </button>
                    </div>

                    {{--  @php
                        $topnavbars = App\Models\TopNavbar::orderBy('created_at', 'asc')->get();
                    @endphp  --}}
                    <div class="hidden lg:flex lg:gap-x-12">
                        <div class="hidden lg:flex lg:gap-x-12">

                            @foreach ($topnavbars = \App\Models\TopNavbar::limit(4)->orderBy('created_at', 'desc')->get() as $index => $topnavbar)
                                @if ($topnavbar->link)
                                    <a href="{{ $topnavbar->link }}" target='_blank'
                                        class="flex text-base items-center text-gray-800 font-bold hover:text-gray-900 py-2 px-3">
                                        {{ $topnavbar->name }}
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    </div>





                    <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                        <button @click="isSearchOpen = !isSearchOpen"
                            class="flex items-center justify-center w-10 h-10 bg-[#163466] rounded-full hover:bg-gray-900 focus:outline-none focus:ring-6 focus:ring-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-[#F9CC0B]">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                            </svg>
                        </button>
                    </div>

                    <div x-show="isSearchOpen" @click.away="isSearchOpen = false"
                        class="absolute mt-2 bg-white border rounded shadow-lg w-80 p-4">
                        <input type="text" wire:model="query" placeholder="Search..."
                            class="w-full p-2 border rounded" />

                        {{--  @if ($mainPages->isNotEmpty())
                            <ul class="mt-4">
                                @foreach ($mainPages as $header)
                                    <li class="mb-2">
                                        @foreach ($mainPages as $header)
                                            @if ($header instanceof \App\Models\Socials)
                                                <strong>Social:</strong>
                                                {{ $header->name }} ({{ $header->url }})
                                            @elseif ($header instanceof \App\Models\QuickLinks)
                                                <strong>QuickLink:</strong>
                                                {{ $header->name }} ({{ $header->link }})
                                            @elseif ($header instanceof \App\Models\Footer)
                                                <strong>Footer:</strong>
                                                {{ $header->title30 }} - {{ $header->title31 }}
                                            @elseif ($header instanceof \App\Models\Currency)
                                                <strong>Currency:</strong>
                                                {{ $header->name }} ({{ $header->code }})
                                            @elseif ($header instanceof \App\Models\HeaderNavigation)
                                                <strong>Navigation:</strong>
                                                {{ $header->title1 }} - {{ $header->title2 }}
                                            @elseif ($header instanceof \App\Models\LatestNews)
                                                <strong>LatestNews:</strong>
                                                {{ $header->title60 }} ({{ $header->title61 }})
                                            @elseif ($header instanceof \App\Models\FeaturedNews)
                                                <strong>FeaturedNews:</strong>
                                                {{ $header->title60 }} - {{ $header->title60 }}
                                            @elseif ($header instanceof \App\Models\LatestGallery)
                                                <strong>LatestGallery:</strong>
                                                {{ $header->title23 }} ({{ $header->title24 }})
                                            @elseif ($header instanceof \App\Models\LatestVideos)
                                                <strong>LatestVideos:</strong>
                                                {{ $header->title11 }} - {{ $header->title60 }}
                                            @elseif ($header instanceof \App\Models\Banner)
                                                <strong>Banner:</strong>
                                                {{ $header->title13 }} ({{ $header->title13 }})
                                            @elseif ($header instanceof \App\Models\BasicBanner)
                                                <strong>BasicBannner:</strong>
                                                {{ $header->title13 }} - {{ $header->title13 }}
                                            @elseif ($header instanceof \App\Models\Breadcrumb)
                                                <strong>Breadcrumb:</strong>
                                                {{ $header->title26 }} ({{ $header->title27 }})
                                            @elseif ($header instanceof \App\Models\Tags)
                                                <strong>Tags:</strong>
                                                {{ $header->title71 }} - {{ $header->title72 }}
                                            @endif
                                        @endforeach
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p class="mt-4 text-gray-600">No results found.</p>
                        @endif  --}}
                    </div>




                </nav>
            </div>



            <div x-cloak x-show="isSearchOpen" x-transition.opacity.duration.200ms x-trap.inert.noscroll="isSearchOpen"
                @keydown.esc.window="isSearchOpen = false" @click.self="isSearchOpen = false"
                class="fixed inset-0 z-30 flex w-full items-start justify-center bg-black/20 p-4 pb-8 backdrop-blur-md lg:p-8"
                role="dialog" aria-modal="true" aria-labelledby="defaultModalTitle">
                <!-- Modal Dialog -->
                <div x-show="isSearchOpen"
                    x-transition:enter="transition ease-out duration-200 delay-100 motion-reduce:transition-opacity"
                    x-transition:enter-start="opacity-0 scale-50" x-transition:enter-end="opacity-100 scale-100"
                    class="flex w-full max-w-xl flex-col gap-4 overflow-hidden rounded-xl border border-slate-300 bg-white text-slate-700 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-300">
                    <!-- Dialog Header -->
                    <div
                        class="flex items-center justify-between border-b border-slate-300 bg-slate-100/60 p-4 dark:border-slate-700 dark:bg-slate-900/20">
                        <h3 id="defaultModalTitle"
                            class="font-semibold tracking-wide text-black dark:text-white font-sans">
                            {{ $header->titles3 }}
                            {{--  Search  --}}

                        </h3>
                        <button @click="isSearchOpen = false" aria-label="close modal">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"
                                stroke="currentColor" fill="none" stroke-width="1.4" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <!-- Dialog Body -->
                    <div class="px-4 py-1">

                        <form class="relative" wire:submit.prevent="searchsite">


                            <div
                                class="flex rounded-lg shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-700 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600">
                                <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">
                                    <svg class="h-6 w-6 text-slate-500" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                    </svg>
                                </span>
                                <input type="text" name="search" id="search" autocomplete="off"
                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6 dark:text-slate-400"
                                    placeholder="Search ...">
                            </div>

                            {{-- @error('search')
                            <p class="text-xs text-danger font-normal text-red-500 text-center font-serif">
                                {{ $message }}
                            </p>
                        @enderror --}}
                        </form>



                        <p class="p-4 text-sm text-gray-500 font-sans text-center capitalize">
                            {{ $header->titles4 }}
                            {{--  No results yet  --}}
                        </p>



                    </div>
                    <!-- Dialog Footer -->
                    {{-- <div class="flex flex-col-reverse justify-between gap-2 border-t border-slate-300 bg-slate-100/60 p-4 dark:border-slate-700 dark:bg-slate-900/20 sm:flex-row sm:items-center md:justify-end">
                    <button @click="isSearchOpen = false" type="button" class="cursor-pointer whitespace-nowrap rounded-xl px-4 py-2 text-center text-sm font-medium tracking-wide text-slate-700 transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 active:opacity-100 active:outline-offset-0 dark:text-slate-300 dark:focus-visible:outline-blue-600">Remind me later</button>
                    <button @click="isSearchOpen = false" type="button" class="cursor-pointer whitespace-nowrap rounded-xl bg-blue-700 px-4 py-2 text-center text-sm font-medium tracking-wide text-slate-100 transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 active:opacity-100 active:outline-offset-0 dark:bg-blue-600 dark:text-slate-100 dark:focus-visible:outline-blue-600">Upgrade Now</button>
                </div> --}}
                </div>
            </div>



            <!-- Mobile menu, show/hide based on menu open state. -->
            <div class="lg:hidden font-sans" role="dialog" aria-modal="true" x-show="isOpen">
                <!-- Background backdrop, show/hide based on slide-over state. -->
                <div class="fixed inset-0 bg-black bg-opacity-50 z-10" x-on:click="isOpen = !isOpen" x-show="showMobile">
                </div>
                <div class="fixed inset-y-0 left-0 z-10 w-full overflow-y-auto bg-white dark:bg-slate-950 px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10 rounded-r-xl"
                    x-show="isOpen" x-transition:enter="transform transition ease-in-out duration-100 sm:duration-200"
                    x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
                    x-transition:leave="transform transition ease-in-out duration-100 sm:duration-200"
                    x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full">
                    <div class="flex items-center justify-between">
                        <a href="#" class="-m-1.5 p-1.5">
                            <span class="sr-only">

                                {{ $header->title19 }}
                                {{--  Kenya Power PLC  --}}

                            </span>
                            <img class="h-16 w-auto" src="{{ asset('storage/' . $header->main_page_image82) }}"
                                alt="">
                        </a>
                        <button x-on:click="isOpen = !isOpen" type="button"
                            class="-m-2.5 rounded-md p-2.5 text-gray-300">
                            <span class="sr-only">

                                {{ $header->titles5 }}
                                {{--  Close menu  --}}

                            </span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="mt-6 flow-root">
                        <div class="-my-6 divide-y divide-gray-500/10">
                            <div class="space-y-2 py-6">
                                @for ($i = 1; $i <= 3; $i++)
                                    <div class="-mx-3">
                                        <button
                                            @click="mobileshow !== {{ $i }} ? mobileshow = {{ $i }} : mobileshow = null"
                                            type="button"
                                            class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base font-medium leading-7 text-gray-900 dark:text-slate-50 hover:bg-secondary hover:text-primary"
                                            aria-controls="disclosure-{{ $i }}" aria-expanded="false">

                                            {{ $header->titles7 }}

                                            {{--  Test  --}}

                                            {{ $i }}
                                            <svg class="h-5 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor"
                                                aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                        <!-- 'Product' sub-menu, show/hide based on menu state. -->
                                        <div class="mt-2 space-y-2 relative overflow-hidden transition-all max-h-0 duration-700 font-serif text-sm leading-6 text-gray-500 dark:text-slate-100"
                                            id="disclosure-{{ $i }}" style=""
                                            x-ref="container{{ $i }}"
                                            x-bind:style="mobileshow == {{ $i }} ? 'max-height: ' + $refs
                                                .container{{ $i }}.scrollHeight + 'px' : ''">
                                            @for ($j = 1; $j <= 2; $j++)
                                                <a href="#"
                                                    class="block rounded-lg py-2 pl-6 pr-3 text-sm font-normal leading-7 text-gray-700 dark:text-slate-100 hover:bg-secondary hover:text-primary">
                                                    {{ $header->titles6 }}
                                                    {{--  Sub-item  --}}

                                                    {{ $j }}

                                                </a>
                                            @endfor
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    </div>
