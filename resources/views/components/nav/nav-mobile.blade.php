<input id="sidebar-menu" type="checkbox" class="drawer-toggle" x-model="mobileOpen" />
<div class="drawer-content flex items-center justify-between w-full">
    <!-- Left: Logo + Toggle -->
    <x-nav.nav-logo :togleshow="true" />
    
    <!-- Right: Theme Switch -->
    <div class="flex items-center gap-2">
        {{-- <x-nav.theme/> --}}
        <x-nav.languge/>
    </div>
</div>

<!-- Drawer (Sidebar) -->
<div class="drawer-side z-50">
    <label for="sidebar-menu" class="drawer-overlay" @click="mobileOpen = false"></label>
    <ul class="menu p-4 w-64 min-h-full bg-base-200">
        
   
    <x-nav.nav-link :active="request()->is('/')" href="/">{{ __('nav.home') }}</x-nav.nav-link>
    <x-nav.nav-link :active="request()->routeIs('webinars')" href="/webinars">{{ __('nav.webinars') }}</x-nav.nav-link>
    <x-nav.nav-link :active="request()->routeIs('services')" href="/services">{{ __('nav.services') }}</x-nav.nav-link>
    <x-nav.nav-link :active="request()->routeIs('products')" href="/products">{{ __('nav.products') }}</x-nav.nav-link>
    <x-nav.nav-link :active="request()->routeIs('about')" href="/about">{{ __('nav.about') }}</x-nav.nav-link>
    <x-nav.nav-link :active="request()->routeIs('contact')" href="/contact">{{ __('nav.contact') }}</x-nav.nav-link>
    <x-nav.nav-link :active="request()->routeIs('qustions')" href="{{ route('qustions') }}">{{ __('nav.faqs') }}</x-nav.nav-link>

    @auth
        <x-nav.nav-link href="{{ route('dashboard') }}">{{ __('nav.dashboard') }}</x-nav.nav-link>
    @endauth


    </ul>
</div>