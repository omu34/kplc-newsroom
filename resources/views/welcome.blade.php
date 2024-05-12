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

    @livewire('banner')

    <div class="bg-white py-12 sm:py-16">
        <div class="mx-auto max-w-5xl">
            <div class="mx-auto ">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Featured</h2>
            </div>
            <div
                class="mx-auto mt-8 grid max-w-2xl auto-rows-fr grid-cols-1 gap-8 sm:mt-10 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                <article
                    class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl bg-gray-900 px-8 pb-8 pt-60 sm:pt-60 lg:pt-52">
                    <img src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3603&q=80"
                        alt="" class="absolute inset-0 -z-10 h-full w-full object-cover">
                    <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/50"></div>
                    <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                    <img src="/pdf-file-svgrepo-com.svg"
                        class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-20 h-12 w-12 fill-white"
                        alt="">
                    <!-- Metadata Section -->
                    <div class="flex flex-wrap items-center gap-y-1 overflow-hidden text-sm leading-6 text-gray-300">
                        <time datetime="2020-03-16" class="mr-8">Mar 16, 2020</time>
                        <div class="-ml-4 flex items-center gap-x-4">
                            <svg viewBox="0 0 2 2" class="-ml-0.5 h-0.5 w-0.5 flex-none fill-white/50">
                                <circle cx="1" cy="1" r="1" />
                            </svg>
                            <div class="flex gap-x-2.5">
                                345 Views
                            </div>
                        </div>
                    </div>

                    <!-- Article Title -->
                    <h3 class="mt-1 text-lg font-semibold leading-6 text-white">
                        <a href="#">
                            <span class="absolute inset-0"></span>
                            Boost your conversion rate Boost your conversion rate Boost your conversion rate Boost your
                            conversion rate Boost your conversion rate
                        </a>
                    </h3>

                    <!-- Additional Metadata Section (with PDF icon) -->
                    <div
                        class="flex mt-4 flex-wrap items-center gap-y-1 overflow-hidden text-sm leading-6 text-gray-300">
                        <img src="/tag.png" class="mr-4" alt="">
                        <div class="-ml-4 flex items-center gap-x-4">
                            <svg viewBox="0 0 2 2" class="-ml-0.5 h-0.5 w-0.5 flex-none fill-white/50">
                                <circle cx="1" cy="1" r="1" />
                            </svg>
                            <div class="flex gap-x-2.5">
                                Test
                            </div>
                        </div>
                    </div>
                </article>
                <article
                    class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl bg-gray-900 px-8 pb-8 pt-60 sm:pt-60 lg:pt-52">
                    <img src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3603&q=80"
                        alt="" class="absolute inset-0 -z-10 h-full w-full object-cover">
                    <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/50"></div>
                    <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                    <img src="/pdf-file-svgrepo-com.svg"
                        class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-20 h-12 w-12 fill-white"
                        alt="">
                    <!-- Metadata Section -->
                    <div class="flex flex-wrap items-center gap-y-1 overflow-hidden text-sm leading-6 text-gray-300">
                        <time datetime="2020-03-16" class="mr-8">Mar 16, 2020</time>
                        <div class="-ml-4 flex items-center gap-x-4">
                            <svg viewBox="0 0 2 2" class="-ml-0.5 h-0.5 w-0.5 flex-none fill-white/50">
                                <circle cx="1" cy="1" r="1" />
                            </svg>
                            <div class="flex gap-x-2.5">
                                345 Views
                            </div>
                        </div>
                    </div>

                    <!-- Article Title -->
                    <h3 class="mt-1 text-lg font-semibold leading-6 text-white">
                        <a href="#">
                            <span class="absolute inset-0"></span>
                            Boost your conversion rate Boost your conversion rate Boost your conversion rate Boost your
                            conversion rate Boost your conversion rate
                        </a>
                    </h3>

                    <!-- Additional Metadata Section (with PDF icon) -->
                    <div
                        class="flex mt-4 flex-wrap items-center gap-y-1 overflow-hidden text-sm leading-6 text-gray-300">
                        <img src="/tag.png" class="mr-4" alt="">
                        <div class="-ml-4 flex items-center gap-x-4">
                            <svg viewBox="0 0 2 2" class="-ml-0.5 h-0.5 w-0.5 flex-none fill-white/50">
                                <circle cx="1" cy="1" r="1" />
                            </svg>
                            <div class="flex gap-x-2.5">
                                Test
                            </div>
                        </div>
                    </div>
                </article>

                <article
                    class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl bg-gray-900 px-8 pb-8 pt-60 sm:pt-60 lg:pt-52">
                    <img src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3603&q=80"
                        alt="" class="absolute inset-0 -z-10 h-full w-full object-cover">
                    <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/50"></div>
                    <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                    <img src="/pdf-file-svgrepo-com.svg"
                        class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-20 h-12 w-12 fill-white"
                        alt="">
                    <!-- Metadata Section -->
                    <div class="flex flex-wrap items-center gap-y-1 overflow-hidden text-sm leading-6 text-gray-300">
                        <time datetime="2020-03-16" class="mr-8">Mar 16, 2020</time>
                        <div class="-ml-4 flex items-center gap-x-4">
                            <svg viewBox="0 0 2 2" class="-ml-0.5 h-0.5 w-0.5 flex-none fill-white/50">
                                <circle cx="1" cy="1" r="1" />
                            </svg>
                            <div class="flex gap-x-2.5">
                                345 Views
                            </div>
                        </div>
                    </div>

                    <!-- Article Title -->
                    <h3 class="mt-1 text-lg font-semibold leading-6 text-white">
                        <a href="#">
                            <span class="absolute inset-0"></span>
                            Boost your conversion rate Boost your conversion rate Boost your conversion rate Boost your
                            conversion rate Boost your conversion rate
                        </a>
                    </h3>

                    <!-- Additional Metadata Section (with PDF icon) -->
                    <div
                        class="flex mt-4 flex-wrap items-center gap-y-1 overflow-hidden text-sm leading-6 text-gray-300">
                        <img src="/tag.png" class="mr-4" alt="">
                        <div class="-ml-4 flex items-center gap-x-4">
                            <svg viewBox="0 0 2 2" class="-ml-0.5 h-0.5 w-0.5 flex-none fill-white/50">
                                <circle cx="1" cy="1" r="1" />
                            </svg>
                            <div class="flex gap-x-2.5">
                                Test
                            </div>
                        </div>
                    </div>
                </article>
                <article
                    class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl bg-gray-900 px-8 pb-8 pt-60 sm:pt-60 lg:pt-52">
                    <img src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3603&q=80"
                        alt="" class="absolute inset-0 -z-10 h-full w-full object-cover">
                    <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/50"></div>
                    <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                    <img src="/pdf-file-svgrepo-com.svg"
                        class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-20 h-12 w-12 fill-white"
                        alt="">
                    <!-- Metadata Section -->
                    <div class="flex flex-wrap items-center gap-y-1 overflow-hidden text-sm leading-6 text-gray-300">
                        <time datetime="2020-03-16" class="mr-8">Mar 16, 2020</time>
                        <div class="-ml-4 flex items-center gap-x-4">
                            <svg viewBox="0 0 2 2" class="-ml-0.5 h-0.5 w-0.5 flex-none fill-white/50">
                                <circle cx="1" cy="1" r="1" />
                            </svg>
                            <div class="flex gap-x-2.5">
                                345 Views
                            </div>
                        </div>
                    </div>

                    <!-- Article Title -->
                    <h3 class="mt-1 text-lg font-semibold leading-6 text-white">
                        <a href="#">
                            <span class="absolute inset-0"></span>
                            Boost your conversion rate Boost your conversion rate Boost your conversion rate Boost your
                            conversion rate Boost your conversion rate
                        </a>
                    </h3>

                    <!-- Additional Metadata Section (with PDF icon) -->
                    <div
                        class="flex mt-4 flex-wrap items-center gap-y-1 overflow-hidden text-sm leading-6 text-gray-300">
                        <img src="/tag.png" class="mr-4" alt="">
                        <div class="-ml-4 flex items-center gap-x-4">
                            <svg viewBox="0 0 2 2" class="-ml-0.5 h-0.5 w-0.5 flex-none fill-white/50">
                                <circle cx="1" cy="1" r="1" />
                            </svg>
                            <div class="flex gap-x-2.5">
                                Test
                            </div>
                        </div>
                    </div>
                </article>


                <!-- More posts... -->
            </div>
        </div>
    </div>

</body>

<style>
    * {
        font-family: "Lexend Deca", sans-serif;
    }
</style>

</html>
