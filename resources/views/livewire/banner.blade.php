<div class="bg-gray-900">
    @foreach ($mainPages as $page)
    <header class="absolute inset-x-0 top-0 z-40">
        {{-- navigation here --}}
        @livewire('header-navigation')
    </header>
    <div class="relative isolate overflow-hidden pt-14 lg:px-0 px-10">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0">

            <img src="/test-1.jpg"
            {{--  src="{{ asset('storage/' . $page->main_page_image84) }}"  --}}
             src="asset('storage/' . $banner->main_page_image84) }}"
             alt="" class="h-full w-full object-cover">
            <div class="absolute inset-0 bg-black opacity-80"></div>
        </div>

        <!-- Content Container -->
        <div class="relative mx-auto max-w-7xl py-16 sm:py-24 lg:pt-44">
            <!-- Newsroom Heading -->
            <div class="flex flex-wrap items-center gap-y-1 overflow-hidden text-base leading-6 text-white">
                <time datetime="2020-03-16" class="text-white mr-6">Mar 16, 2020</time>
                <div class="-ml-4 flex items-center gap-x-2">
                    <svg viewBox="0 0 2 2" class="-ml-0.5 h-0.5 w-0.5 flex-none fill-white">
                        <circle cx="1" cy="1" r="1" />
                    </svg>
                    <div class="flex text-white">
                        {{ $page->main_page_name17 }}

                    </div>
                    <svg viewBox="0 0 2 2" class="-ml-0.5 h-0.5 w-0.5 flex-none fill-white">
                        <circle cx="1" cy="1" r="1" />
                    </svg>
                    <div class="flex flex-wrap items-center gap-y-1 overflow-hidden text-base leading-6 text-gray-300">
                        <svg width="16" height="16" class="mr-6" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.9843 6.03574L12.9849 6.03637C14.1009 7.1464 14.1 8.94721 12.9856 10.0497L12.9843 10.051L10.0583 12.977C10.0581 12.9772 10.0579 12.9774 10.0578 12.9775C8.94073 14.088 7.13835 14.087 6.02904 12.9777L3.00904 9.95766C2.44299 9.39161 2.14392 8.60986 2.17965 7.80879C2.17965 7.80862 2.17966 7.80845 2.17967 7.80828L2.33958 4.47676C2.33959 4.47664 2.3396 4.47652 2.3396 4.47639C2.39784 3.32107 3.32053 2.39861 4.48166 2.34636L4.48265 2.34632L7.81599 2.18632L7.81739 2.18625C8.61514 2.14457 9.39685 2.44829 9.9643 3.01574L12.9843 6.03574ZM4.08 6.33337C4.08 7.57746 5.08924 8.5867 6.33334 8.5867C7.57743 8.5867 8.58667 7.57746 8.58667 6.33337C8.58667 5.08927 7.57743 4.08003 6.33334 4.08003C5.08924 4.08003 4.08 5.08927 4.08 6.33337Z" fill="#FACA22" stroke="#FACA22" stroke-width="0.666667"/>
                            </svg>
                        <div class="-ml-4 flex items-center gap-x-2">

                            <div class="flex text-white gap-x-2">
                                {{ $page->main_page_name17 }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <h1 data-aos="fade-left" data-aos-duration="1500"
                    class="text-4xl my-6 font-bold text-white lg:py-0 py-5">
                    {{ $page->main_page_name13 }}
                </h1>

            <h1 data-aos="fade-left" data-aos-duration="1500" class="text-4xl my-6 font-bold text-white lg:py-0 py-5">KPLC Newsroom</h1>

            <p class="text-white max-w-2xl pb-5">Lorem ipsum dolor sit amet consectetur adipisicing</p>

                </p>
            <div class="flex items-center justify-start gap-x-12 mt-6">
                <!-- Button: Share This -->
                <button class="flex items-center px-4 py-2 text-base font-medium leading-5 bg-white uppercase text-blue-900 border border-transparent rounded-xl shadow-sm hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Share This
                    <!-- Chevron Icon -->
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>



                <!-- Horizontal Stack of Icons -->
                <div class="flex items-center space-x-6">
                    <!-- Icon: Twitter -->
                    <a href="https://twitter.com/intent/tweet?url=https://your-article-url.com" target="_blank" rel="noopener noreferrer">


                        <svg width="21" height="20" class="h-7 w-7" viewBox="0 0 21 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.5 0.51642H6.41516L11.8827 7.87074L18.6884 0.3479L20.3055 0.375987L12.6889 8.92871L20.5 19.4335H14.5872L9.42665 12.5801L3.12245 19.6021H1.53117L8.6439 11.5783L0.5 0.51642ZM5.8574 1.60248H2.73342L15.2317 18.3194H18.2994L5.8574 1.60248Z"
                                    fill="#FACA21"></path>
                            </svg>
                    </a>

                    <!-- Icon: Facebook -->
                    <a href="https://www.facebook.com/sharer/sharer.php?u=https://your-article-url.com" target="_blank" rel="noopener noreferrer">
                        <svg width="21" class="h-7 w-7" height="20" viewBox="0 0 21 20" class="w-6 h-6 text-blue-900" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20.2856 10C20.2856 4.48 15.8056 0 10.2856 0C4.76564 0 0.285645 4.48 0.285645 10C0.285645 14.84 3.72564 18.87 8.28564 19.8V13H6.28564V10H8.28564V7.5C8.28564 5.57 9.85564 4 11.7856 4H14.2856V7H12.2856C11.7356 7 11.2856 7.45 11.2856 8V10H14.2856V13H11.2856V19.95C16.3356 19.45 20.2856 15.19 20.2856 10Z" fill="#FACA21"/>
                            </svg>
                    </a>

                    <!-- Icon: LinkedIn -->
                    <a href="https://www.linkedin.com/sharing/share-offsite/?url=https://your-article-url.com" target="_blank" rel="noopener noreferrer">
                        <svg width="17" class="h-7 w-7" height="18" viewBox="0 0 17 18" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14.9167 0.725098C15.4029 0.725098 15.8692 0.918252 16.213 1.26207C16.5568 1.60589 16.75 2.0722 16.75 2.55843V15.3918C16.75 15.878 16.5568 16.3443 16.213 16.6881C15.8692 17.0319 15.4029 17.2251 14.9167 17.2251H2.08333C1.5971 17.2251 1.13079 17.0319 0.786971 16.6881C0.443154 16.3443 0.25 15.878 0.25 15.3918V2.55843C0.25 2.0722 0.443154 1.60589 0.786971 1.26207C1.13079 0.918252 1.5971 0.725098 2.08333 0.725098H14.9167ZM14.4583 14.9334V10.0751C14.4583 9.28254 14.1435 8.52245 13.5831 7.96203C13.0226 7.40161 12.2626 7.08676 11.47 7.08676C10.6908 7.08676 9.78333 7.56343 9.34333 8.27843V7.26093H6.78583V14.9334H9.34333V10.4143C9.34333 9.70843 9.91167 9.13093 10.6175 9.13093C10.9579 9.13093 11.2843 9.26614 11.525 9.50681C11.7656 9.74748 11.9008 10.0739 11.9008 10.4143V14.9334H14.4583ZM3.80667 5.82176C4.2151 5.82176 4.60681 5.65952 4.89561 5.37071C5.18442 5.0819 5.34667 4.6902 5.34667 4.28176C5.34667 3.42926 4.65917 2.7326 3.80667 2.7326C3.3958 2.7326 3.00177 2.89581 2.71124 3.18634C2.42072 3.47686 2.2575 3.8709 2.2575 4.28176C2.2575 5.13426 2.95417 5.82176 3.80667 5.82176ZM5.08083 14.9334V7.26093H2.54167V14.9334H5.08083Z"
                            fill="#FACA21"></path>
                    </svg>
                    </a>
                </div>
            </div>



        </div>
    </div>
    @endforeach
</div>
