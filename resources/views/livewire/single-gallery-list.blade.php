<div class="bg-white bg-center py-12 sm:py-16">
    <div class="mx-auto lg:px-0 px-10 max-w-5xl">
        
        <div class="mx-auto grid max-w-2xl auto-rows-fr grid-cols-1 gap-8 sm:mt-4 lg:mx-0 lg:max-w-none lg:grid-cols-4">
            @foreach($posts as $index => $post)
            <img style="height:350px;" class="max-w-full object-cover rounded-lg cursor-pointer" src="{{ $post }}" alt="" wire:click="selectPost({{ $index }})">
            @endforeach
        </div>

        <!-- Popup Modal -->
        @if($showModal)
        <div class="fixed z-50 inset-0 overflow-y-auto flex items-center justify-center">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <!-- Overlay to dim the background -->
                <div class="absolute inset-0 bg-black opacity-80"></div>
            </div>
            <div class="relative z-20 bg-white rounded-lg max-w-3xl ">
                <img style="height:500px;" class="max-w-full object-cover rounded-lg" src="{{ $posts[$selectedPostIndex] }}" alt="">
                <!-- Navigation Buttons -->
                <div class="absolute top-1/2 -translate-y-1/2 left-0 mt-4 ml-4 flex">
                    <button wire:click="previousPost" class="px-4 py-2 text-sm font-medium text-white  border border-transparent rounded-md shadow-sm  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-900">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                    </button>
                </div>
                <div class="absolute top-1/2 -translate-y-1/2 right-0 mt-4 mr-4 flex">
                    <button wire:click="nextPost" class="px-4 py-2 text-sm font-medium text-white  border border-transparent rounded-md shadow-sm  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-900">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
                <!-- Close Button -->
                <button wire:click="closePopup" class="absolute top-0 right-0 mt-4 mr-4 flex items-center justify-center w-12 h-12 bg-white text-black rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
        @endif
    </div>
</div>
