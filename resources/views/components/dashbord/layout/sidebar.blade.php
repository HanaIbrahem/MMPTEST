<div class="drawer-side">
    <label for="sidebar-toggle" class="drawer-overlay"></label>
    <div class="menu p-4 w-60 h-full bg-base-200 text-base-content">
        <!-- Sidebar content here -->

        <div class="mb-4">

            <a href="/">
            <h1 class="text-xl font-bold">Mega Mine Plas</h1>

            </a>
            <p class="text-sm opacity-70">Welcome back, {{auth()->user()->name}}</p>
        </div>

        <ul class="">
            <x-dashbord.nav.nav-link href="{{ route('dashboard') }}"
             :active="request()->routeIs('dashboard')" title="Dashbord">

                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
            </x-dashbord.nav.nav-link>

            <x-dashbord.nav.nav-link href="{{ route('control.about') }}" 
             title="About"   :active="request()->routeIs('control.about')">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor"
                     viewBox="0 0 24 24">
                    <path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2ZM9 10h6v2H9Zm0 4h6v2H9Z" />
                </svg>
            </x-dashbord.nav.nav-link>
            
            <x-dashbord.nav.nav-link href="{{ route('control.service.index') }}"
             title="Services" :active="request()->routeIs('control.service.*')">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor"
                     viewBox="0 0 24 24">
                    <path d="M4 4h16v2H4zm2 4h12v2H6zm4 4h4v2h-4zm-2 4h8v2H8z" />
                </svg>
            </x-dashbord.nav.nav-link>
            
            <x-dashbord.nav.nav-link href="{{ route('control.product.index')}}"
             title="Products"  :active="request()->routeIs('control.product.*')">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor"
                     viewBox="0 0 24 24">
                    <path d="M3 7h18v2H3zm2 4h14v2H5zm2 4h10v2H7z" />
                </svg>
            </x-dashbord.nav.nav-link>
            
            <x-dashbord.nav.nav-link href="{{ route('control.webienars.index') }}" 
            title="Webinars" :active="request()->routeIs('control.webienars.*')">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor"
                     viewBox="0 0 24 24">
                    <path d="M5 5h14v14H5zM7 7v10h10V7z" />
                </svg>
            </x-dashbord.nav.nav-link>
            
            <x-dashbord.nav.nav-link href="{{ route('control.contact') }}" 
             :active="request()->routeIs('control.contact')" title="Contact">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M3 5h18M3 8l9 6 9-6M3 19h18V8" />
                </svg>
            </x-dashbord.nav.nav-link>
            
            <x-dashbord.nav.nav-link href="{{ route('control.qustions.index') }}" 
            title="F&A" :active="request()->routeIs('control.qustions.*')" >
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M12 8v4m0 4h.01M4 6h16M4 12h8M4 18h8" />
                </svg>
            </x-dashbord.nav.nav-link>
        </ul>
        
    </div>

 
</div>
