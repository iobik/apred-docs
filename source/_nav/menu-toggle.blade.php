<div x-data="{ open: false }" @click.away="open = false" @close.stop="open = false">
    <!-- Mobile menu button -->
    <button @click="open = ! open"  class="crimson inline-flex items-center justify-center py-2 px-5 rounded-full text-gray-400 hover:text-gray-500 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 mr-4" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <!-- Icon when menu is closed. -->
        <!--
        Heroicon name: outline/menu

        Menu open: "hidden", Menu closed: "block"
        -->
        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
        <!-- Icon when menu is open. -->
        <!--
        Heroicon name: outline/x

        Menu open: "block", Menu closed: "hidden"
        -->
        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>

    <div class="lg:ml-4 lg:flex lg:items-center">
        <!--
        Profile dropdown panel, show/hide based on dropdown state.

        Entering: "transition ease-out duration-100"
            From: "transform opacity-0 scale-95"
            To: "transform opacity-100 scale-100"
        Leaving: "transition ease-in duration-75"
            From: "transform opacity-100 scale-100"
            To: "transform opacity-0 scale-95"
        -->
        <div x-show="open"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="transform opacity-0 scale-95"
            x-transition:enter-end="transform opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="transform opacity-100 scale-100"
            x-transition:leave-end="transform opacity-0 scale-95"
            class="origin-top-right absolute right-0 mt-2 w-screen rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 z-50" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
            @include('_nav.menu', ['items' => $page->navigation])
        </div>
    </div>
    </div>
</div>