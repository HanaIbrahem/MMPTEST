<div x-data="{
  openDropdown: null,
  mobileOpen: false,
  hoverTimeout: null,
  setDropdown(id, delay = 0) {
      clearTimeout(this.hoverTimeout);
      this.hoverTimeout = setTimeout(() => {
          this.openDropdown = id;
      }, delay);
  },
  closeDropdown(delay = 0) {
      clearTimeout(this.hoverTimeout);
      this.hoverTimeout = setTimeout(() => {
          this.openDropdown = null;
      }, delay);
  }
}" 
@click.away="openDropdown = null"
class="navbar bg-base-100 shadow-sm lg:px-10 px-2 fixed top-0 left-0 right-0 z-50">

  <!-- Mobile Sidebar -->
  <div class="drawer lg:hidden">
    <x-nav.nav-mobile/>
  </div>
  
  <!-- Desktop Navbar -->
  <div class="hidden lg:flex justify-between w-full items-center">
      <!-- Left: Logo -->
      <x-nav.nav-logo />
      
      <!-- Middle: Navigation Links -->
     <ul class="menu menu-horizontal px-1">
    <x-nav.nav-link :active="request()->is('/')" href="/">{{ __('nav.home') }}</x-nav.nav-link>
    <x-nav.nav-link :active="request()->routeIs('webinars')" href="/webinars">{{ __('nav.webinars') }}</x-nav.nav-link>
    <x-nav.nav-link :active="request()->routeIs('services')" href="/services">{{ __('nav.services') }}</x-nav.nav-link>
    <x-nav.nav-link :active="request()->routeIs('products')" href="/products">{{ __('nav.products') }}</x-nav.nav-link>
    <x-nav.nav-link :active="request()->routeIs('about')" href="/about">{{ __('nav.about') }}</x-nav.nav-link>
    <x-nav.nav-link href="/contact" :active="request()->routeIs('contact')" >{{ __('nav.contact') }}</x-nav.nav-link>
    <x-nav.nav-link :active="request()->routeIs('qustions')" href="{{ route('qustions') }}">{{ __('nav.faqs') }}</x-nav.nav-link>

    @auth
        <x-nav.nav-link href="{{ route('dashboard') }}">{{ __('nav.dashboard') }}</x-nav.nav-link>
    @endauth
</ul>

      
      <!-- Right: Theme Switch and other items -->
      <div class="flex items-center gap-4">
          {{-- <x-nav.theme/> --}}
          <x-nav.languge/>
          <!-- Add any additional right-aligned items here -->
      </div>
  </div>
</div>

