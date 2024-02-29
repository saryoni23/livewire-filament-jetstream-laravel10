<nav class="flex flex-row items-center justify-between h-16 py-3 border-b lg:px-8">
    <div class="text-gray-800 font-semibold ">
        <a href="{{ route('home') }} "wire:navigate>
            <span class="text-yellow-500 text-xl">&lt;TIC&gt;</span> BUS
        </a>
    </div>
    <div class="hidden lg:flex lg:flex-1  top-menu ml-10">
        <div class="flex space-x-4">
            <!-- <li>
                <a class="flex space-x-2 items-center hover:text-yellow-900 text-sm text-yellow-500"
                    href="http://127.0.0.1:8000">
                    Home
                </a>
            </li> -->
            <div class="hidden space-x-5 sm:-my-px sm:ms-10 sm:flex">
                <x-nav-link href="{{ route('home') }}" wire:navigate :active="request()->routeIs('home')">
                    {{ __('Home') }}
                </x-nav-link>
                <x-nav-link href="{{ route('post.index') }}" wire:navigate :active="request()->routeIs('post.index')">
                    {{ __('Blog') }}
                </x-nav-link>
            </div>
            <div class="hidden pt-4 pb-1 border-t border-gray-200">
                <div class="flex items-center px-4">
                    @auth
                    @include('layouts.partials.header-right-auth')
                    @else
                    @include('layouts.partials.header-right-guest')
                    @endauth
                </div>
            </div>
        </div>
    </div>

    <div class="hidden lg:flex lg:flex-1 lg:justify-end space-x-10 ">
        @auth
        @include('layouts.partials.header-right-auth')
        @else
        @include('layouts.partials.header-right-guest')
        @endauth

    </div>
    <!-- Hamburger -->
    <div class="-me-2 flex items-center sm:hidden">
        <button @click="open = ! open"
            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
</nav>


