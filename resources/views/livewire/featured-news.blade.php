<div>


        {{--  @php
            use Carbon\Carbon;
            $posts = App\Models\FeaturedNews::orderBy('created_at', 'asc')->get();
        @endphp



        <div class="bg-white dark:bg-gray-950 py-12 sm:py-16">
            @foreach ($posts as $post)
                <div class="mx-auto lg:px-0 px-4 max-w-7xl">
                    <div class="bg-white dark:bg-gray-950 py-12 sm:py-16">
                        <div class="mx-auto flex flex-col items-center sm:flex-row sm:justify-between mb-8">
                            <h2
                                class="text-3xl font-bold tracking-tight lg:pb-0 pb-5 text-gray-900 dark:text-white sm:text-3xl">
                                {{ $post->featured }}
                            </h2>
                            <button wire:click="toggleShowPosts"
                                class="px-4 py-2 rounded-md font-medium text-base leading-6 shadow-sm
                           @if ($showPosts) text-white @else bg-gray-200 text-gray-700 hover:bg-gray-300 @endif">
                                @if ($showPosts)
                                    On
                                @else
                                    Off
                                @endif
                            </button>
                        </div>

                        @if ($showPosts)
                            <div
                                class="mx-auto grid max-w-2xl auto-rows-fr grid-cols-1 gap-8 sm:mt-4 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                                @php
                                    $posts = App\Models\FeaturedNews::orderBy('created_at', 'asc')->get();
                                @endphp

                                @foreach ($posts->take(4) as $post)
                                    <article
                                        class="relative isolate flex flex-col transition-transform transform hover:scale-105 justify-end overflow-hidden rounded-2xl bg-gray-900 px-4 pb-8 pt-44 sm:pt-60 lg:pt-48">
                                        <a href="featured-news {{ $post->link }}" target="_blank"
                                            class="absolute inset-0 z-10">
                                            <img src="{{ asset('storage/' . $post->file) }}" alt=""
                                                class="absolute inset-0 z-0 h-full w-full object-cover">
                                            <div class="absolute inset-0 z-0 bg-gradient-to-t from-black via-gray-900/50">
                                            </div>
                                            <div class="absolute inset-0 z-0 rounded-2xl ring-1 ring-inset ring-gray-900/10">
                                            </div>
                                        </a>

                                        <!-- Metadata Section -->
                                        <div
                                            class="relative z-20 flex flex-wrap items-center gap-y-1 overflow-hidden text-base leading-6 text-white">
                                            <time datetime=" " class="text-white mr-6">
                                                @if ($post->day)
                                                    {{ \Carbon\Carbon::parse($post->day)->format('M d, Y') }}
                                                @else
                                                    N/A
                                                @endif
                                            </time>
                                            <div class="-ml-4 flex items-center gap-x-2">
                                                <svg viewBox="0 0 2 2" class="-ml-0.5 h-0.5 w-0.5 flex-none fill-white">
                                                    <circle cx="1" cy="1" r="1" />
                                                </svg>
                                                <div class="flex text-white">
                                                    views {{ $post->views }}
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Article Title -->
                                        <h3 class="relative z-20 mt-1 text-base font-normal leading-6 text-white">
                                            <a href="#">
                                                <span class="absolute inset-0"></span>
                                                {{ $post->description }}
                                            </a>
                                        </h3>

                                        <!-- Additional Metadata Section (with PDF icon) -->
                                        <div
                                            class="relative z-20 flex mt-2 flex-wrap items-center gap-y-1 overflow-hidden text-base leading-6 text-gray-300">
                                            <svg width="16" height="16" class="mr-6" viewBox="0 0 16 16"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.9843 6.03574L12.9849 6.03637C14.1009 7.1464 14.1 8.94721 12.9856 10.0497L12.9843 10.051L10.0583 12.977C10.0581 12.9772 10.0579 12.9774 10.0578 12.9775C8.94073 14.088 7.13835 14.087 6.02904 12.9777L3.00904 9.95766C2.44299 9.39161 2.14392 8.60986 2.17965 7.80879C2.17965 7.80862 2.17966 7.80845 2.17967 7.80828L2.33958 4.47676C2.33959 4.47664 2.3396 4.47652 2.3396 4.47639C2.39784 3.32107 3.32053 2.39861 4.48166 2.34636L4.48265 2.34632L7.81599 2.18632L7.81739 2.18625C8.61514 2.14457 9.39685 2.44829 9.9643 3.01574L12.9843 6.03574ZM4.08 6.33337C4.08 7.57746 5.08924 8.5867 6.33334 8.5867C7.57743 8.5867 8.58667 7.57746 8.58667 6.33337C8.58667 5.08927 7.57743 4.08003 6.33334 4.08003C5.08924 4.08003 4.08 5.08927 4.08 6.33337Z"
                                                    fill="#FACA22" stroke="#FACA22" stroke-width="0.666667" />
                                            </svg>
                                            <div class="-ml-4 flex items-center gap-x-2">
                                                <div class="flex text-white gap-x-2">
                                                    likes {{ $post->likes }}
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>  --}}













        <div class="bg-white dark:bg-gray-950 py-12 sm:py-16">
            <div>
                @foreach ($showPosts as $showPost)
                    <div class="post">
                        <h2>Type: {{ $showPost['type'] }}</h2>
                        <h3>Post Details:</h3>
                        <pre>{{ print_r($featuredPost['post'], true) }}</pre>
                        @if ($showPost['file'])
                            <h3>File Details:</h3>
                            <pre>{{ print_r($featuredPost['file'], true) }}</pre>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>






       </div>
