<div x-data="{ isOpen: false, isSearchOpen: false }">
    <nav class="flex lg:hidden mx-auto max-w-5xl items-center bg-white px-6 py-2 justify-between " aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="/" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <img class="h-16 w-auto" src="/logo.svg" alt="">
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
                class="-m-6.5 inline-flex items-center justify-center rounded-md p-6.5 text-gray-400">
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

    <nav class="lg:flex hidden mx-auto max-w-5xl items-center rounded-md justify-between mt-12" aria-label="Global">
        <!-- loop category items -->
        <div class="flex gap-x-12 ml-auto">

            <a href="#" data-aos="fade-left" data-aos-duration="1000" class="text-sm hover:underline hover:underline-offset-4 font-normal leading-6 text-white">Alternative Energy</a>
            <a href="#" data-aos="fade-left" data-aos-duration="1000" class="text-sm hover:underline hover:underline-offset-4 font-normal leading-6 text-white">Public</a>
            <a href="#" data-aos="fade-left" data-aos-duration="1000" class="text-sm hover:underline hover:underline-offset-4 font-normal leading-6 text-white">Stock Market</a>


           
        </div>
    </nav>

    <nav class="lg:flex hidden mx-auto max-w-5xl items-center bg-white px-6 py-2 rounded-md justify-between mt-6"
        aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <img class="h-16 w-auto" src="/logo.svg" alt="">
            </a>
        </div>
        <div class="flex lg:hidden">
            <button @click="isOpen = !isOpen" type="button"
                class="-m-6.5 inline-flex items-center justify-center rounded-md p-6.5 text-gray-400">
                <span class="sr-only">Open main menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
            <a href="#" class="text-sm hover:underline hover:underline-offset-4 font-normal text-black">Product</a>
            <a href="#" class="text-sm hover:underline hover:underline-offset-4 font-normal  text-black">Features</a>
            <a href="#" class="text-sm hover:underline hover:underline-offset-4 font-normal text-black">Marketplace</a>
            <a href="#" class="text-sm hover:underline hover:underline-offset-4 font-normal text-black">Company</a>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <button @click="isSearchOpen = !isSearchOpen"
                class="flex items-center justify-center w-10 h-10 bg-[#163466] rounded-full hover:bg-gray-900 focus:outline-none focus:ring-6 focus:ring-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 text-[#F9CC0B]">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
            </button>

        </div>
    </nav>


    <div x-cloak 
    @keydown.escape.window="isSearchOpen = false"
     x-show="isSearchOpen" @click.away="isSearchOpen = false" class="relative z-10" role="dialog"
        aria-modal="true">
        <!--
      Background backdrop, show/hide based on modal state.
  
      Entering: "ease-out duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "ease-in duration-200"
        From: "opacity-100"
        To: "opacity-0"
    -->
        <div class="fixed inset-0 z-10 bg-black bg-opacity-80 transition-opacity"></div>

        <div class="fixed inset-0 z-50 overflow-y-auto p-4 sm:p-6 md:p-20">
            <!--
        Command palette, show/hide based on modal state.
  
        Entering: "ease-out duration-300"
          From: "opacity-0 scale-95"
          To: "opacity-100 scale-100"
        Leaving: "ease-in duration-200"
          From: "opacity-100 scale-100"
          To: "opacity-0 scale-95"
      -->
            <div
                class="mx-auto max-w-2xl transform divide-y divide-gray-500 divide-opacity-10 overflow-hidden rounded-xl bg-white shadow-2xl ring-1 ring-black ring-opacity-5 backdrop-blur backdrop-filter transition-all">
                <div class="relative">
                    <svg class="pointer-events-none absolute left-4 top-3.5 h-5 w-5 text-gray-900 text-opacity-40"
                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                            clip-rule="evenodd" />
                    </svg>
                    <input type="text"
                        class="h-12 w-full border-0 bg-transparent pl-11 pr-4 text-gray-900 focus:ring-0 sm:text-sm"
                        placeholder="Search...">
                </div>

                <!-- Default state, show/hide based on command palette state. -->
                <ul class="max-h-80 scroll-py-2 divide-y divide-gray-500 divide-opacity-10 overflow-y-auto">
                    <li class="p-2">
                        <h2 class="mb-2 mt-4 px-3 text-xs font-semibold text-gray-900">Search Results</h2>
                        <ul class="text-sm text-gray-700">
                            <!-- Active: "bg-gray-900 bg-opacity-5 text-gray-900" -->
                            <li class="group flex cursor-default select-none items-center rounded-md px-3 py-2">
                                <!-- Not Active: "text-opacity-40" -->
                                <svg class="h-6 w-6 flex-none text-gray-900 text-opacity-40" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                                </svg>
                                <span class="ml-3 flex-auto truncate">Workflow Inc. / Website Redesign</span>
                                <!-- Not Active: "hidden" -->
                                <span class="ml-3 hidden flex-none text-gray-500">Jump to...</span>
                            </li>
                        </ul>
                    </li>

                </ul>

                <!-- Results, show/hide based on command palette state. -->
                <ul class="max-h-96 overflow-y-auto p-2 text-sm text-gray-700">
                    <!-- Active: "bg-gray-900 bg-opacity-5 text-gray-900" -->
                    <li class="group flex cursor-default select-none items-center rounded-md px-3 py-2">
                        <!-- Not Active: "text-opacity-40" -->
                        <svg class="h-6 w-6 flex-none text-gray-900 text-opacity-40" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                        </svg>
                        <span class="ml-3 flex-auto truncate">Workflow Inc. / Website Redesign</span>
                        <!-- Not Active: "hidden" -->
                        <span class="ml-3 hidden flex-none text-gray-500">Jump to...</span>
                    </li>
                </ul>

                <!-- Empty state, show/hide based on command palette state. -->
                <div class="px-6 py-14 text-center sm:px-14">
                    <svg class="mx-auto h-6 w-6 text-gray-900 text-opacity-40" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                    </svg>
                    <p class="mt-4 text-sm text-gray-900">We couldn't find any news with that term. Please try again.
                    </p>

                    <svg @click="isSearchOpen = !isSearchOpen"
                        class="mx-auto h-6 w-6 mt-4 text-gray-900 text-opacity-40" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>

                </div>
            </div>
        </div>
    </div>



    <!-- Mobile menu, show/hide based on menu open state. -->
    <div x-cloak x-show="isOpen" class="lg:hidden" role="dialog" aria-modal="true">
        <!-- Background backdrop, show/hide based on slide-over state. -->
        <div class="fixed inset-0 z-50"></div>
        <div
            class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-gray-900 px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-white/10">
            <div class="flex items-center justify-between">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500"
                        alt="">
                </a>
                <button @click="isOpen = !isOpen" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-400">
                    <span class="sr-only">Close menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/25">
                    <div class="space-y-2 py-6">
                        <a href="#"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-800">Product</a>
                        <a href="#"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-800">Features</a>
                        <a href="#"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-800">Marketplace</a>
                        <a href="#"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-800">Company</a>
                    </div>
                    <div class="py-6">
                        <a href="#"
                            class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-white hover:bg-gray-800">Log
                            in</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
