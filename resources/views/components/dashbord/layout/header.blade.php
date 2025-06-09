  <div class="navbar bg-base-200 lg:hidden">
                <div class="flex-none">
                    <label for="sidebar-toggle" class="btn btn-square btn-ghost">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            class="inline-block w-5 h-5 stroke-current">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </label>
                </div>
                <div class="flex-1">
                    <a href="{{ route('dashboard') }}" class=" normal-case text-xl">
                         <span class="text-primary font-bold">MMP</span>  Dashbord
                    </a>
                    
                </div>
                 <div class="flex m-1">
                            <a href="{{ route('control.logout') }}">
                                Logout
                            </a>
                        </div>
                <div class="flex">
                    <x-nav.theme />
                </div>
                
            </div>