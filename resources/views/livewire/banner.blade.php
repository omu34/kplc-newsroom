<div class="bg-gray-900">
    <header class="absolute inset-x-0 top-0 z-50">
        {{-- navigation here --}}
        @livewire('header-navigation')
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