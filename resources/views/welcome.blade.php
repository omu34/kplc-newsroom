<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">

        @vite('resources/css/app.css')
    </head>
    <body class="antialiased">

        <div class="bg-gray-900">
            
            <header class="absolute inset-x-0 top-0 z-50">
                <nav class="flex mx-auto max-w-5xl items-center rounded-md justify-between mt-12 " aria-label="Global">
                    <div class="flex lg:flex-1">
                      
                    </div>
                  
                    <div class="hidden lg:flex lg:gap-x-12">
                      <a href="#" class="text-sm font-normal	 leading-6 text-white">Product</a>
                      <a href="#" class="text-sm font-normal	 leading-6 text-white">Features</a>
                      <a href="#" class="text-sm font-normal	 leading-6 text-white">Marketplace</a>
                      <a href="#" class="text-sm font-normal	 leading-6 text-white">Company</a>
                    </div>
                   
                  </nav>
              <nav class="flex mx-auto max-w-5xl items-center bg-white p-6 rounded-md justify-between mt-6 " aria-label="Global">
                <div class="flex lg:flex-1">
                  <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <img class="h-16 w-auto" src="/logo.png" alt="">
                  </a>
                </div>
                <div class="flex lg:hidden">
                  <button type="button" class="-m-6.5 inline-flex items-center justify-center rounded-md p-6.5 text-gray-400">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                  </button>
                </div>
                <div class="hidden lg:flex lg:gap-x-12">
                  <a href="#" class="text-sm font-normal text-black">Product</a>
                  <a href="#" class="text-sm font-normal  text-black">Features</a>
                  <a href="#" class="text-sm font-normal text-black">Marketplace</a>
                  <a href="#" class="text-sm font-normal text-black">Company</a>
                </div>
                <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                    <button class="flex items-center justify-center w-10 h-10 bg-[#163466] rounded-full hover:bg-gray-300 focus:outline-none focus:ring-6 focus:ring-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-[#F9CC0B]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                          </svg>     
                      </button>
                      
                </div>
              </nav>
              <!-- Mobile menu, show/hide based on menu open state. -->
              <div class="lg:hidden" role="dialog" aria-modal="true">
                <!-- Background backdrop, show/hide based on slide-over state. -->
                <div class="fixed inset-0 z-50"></div>
                <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-gray-900 px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-white/10">
                  <div class="flex items-center justify-between">
                    <a href="#" class="-m-1.5 p-1.5">
                      <span class="sr-only">Your Company</span>
                      <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="">
                    </a>
                    <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-400">
                      <span class="sr-only">Close menu</span>
                      <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                      </svg>
                    </button>
                  </div>
                  <div class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-gray-500/25">
                      <div class="space-y-2 py-6">
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-800">Product</a>
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-800">Features</a>
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-800">Marketplace</a>
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-800">Company</a>
                      </div>
                      <div class="py-6">
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-white hover:bg-gray-800">Log in</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </header>
          
            <div class="relative isolate overflow-hidden pt-14">
                <!-- Background Image with Overlay -->
                <div class="absolute inset-0">
                  <img src="/test.jpg" alt="" class="h-full w-full object-cover">
                  <div class="absolute inset-0 bg-black opacity-50"></div>
                </div>
              
                <!-- Content Container -->
                <div class="relative mx-auto max-w-5xl py-16 sm:py-24 lg:pt-60">
                  <!-- Newsroom Heading -->
                  <h1 class="text-4xl font-bold text-white">Newsroom</h1>
                </div>
              </div>
              
          </div>    
    </body>

    <style>
        *{font-family: "Lexend Deca", sans-serif;}
    </style>
</html>
