<!-- Navbar -->

<header x-data="{open: false}" class=" inset-x-0 top-0 z-10 mb-5  mx-auto max-w-screen-xl">
    <livewire:navigation-menu />
<div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
    <div class="pt-2 pb-3 space-y-1">
        <x-responsive-nav-link href="{{ route('home') }}" wire:navigate :active="request()->routeIs('home')">
            {{ __('Home') }}
        </x-responsive-nav-link>
        <x-responsive-nav-link href="{{ route('post.index') }}" wire:navigate :active="request()->routeIs('post.index')">
            {{ __('Blog') }}
        </x-responsive-nav-link>
    </div>
    <div class="bg-white lg:flex lg:flex-1 lg:justify-end space-x-10 ">
        @auth
        @include('layouts.partials.header-respont-auth')
        @else
        @include('layouts.partials.header-right-guest')
        @endauth
    </div>
</div>
</header>


<!-- end Navbar -->
