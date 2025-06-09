@php
if (!isset($_COOKIE['theme'])) {
    setcookie('theme', 'corporate', time() + (86400 * 30), '/');
}
$theme = $_COOKIE['theme'] ?? 'corporate';
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="themeSwitcher()" x-init="init()" :data-theme="theme">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MMP Academic</title>

    <!-- Fonts -->

    <link rel="icon" href="{{ asset('images/Logo.png') }}" type="image/png">

    <link rel="icon" href="">
    @vite(['resources/css/app.css','resources/js/admin.js'])
</head>
<body>
    <div class="drawer lg:drawer-open">
        <input id="sidebar-toggle" type="checkbox" class="drawer-toggle" />

        <!-- Page content -->
        <div class="drawer-content flex flex-col">
            <!-- Navbar -->
            <x-dashbord.layout.header/>

            <!-- Main content -->
            <main class="flex-1 p-6">
                <div class="hidden lg:flex justify-between items-center mb-6">
                    
                    <a href="{{ route('dashboard') }}">
                        <h1 class="text-2xl font-bold">  <span class="text-primary">MMP</span> Dashbord</h1>
                    </a>
                    <div class="flex items-center gap-2">
                        <div class="m-1">
                            <a href="{{ route('control.logout') }}">
                                Logout
                            </a>
                        </div>
                        <div class="form-control">
                            <x-nav.theme />
                        </div>
                    </div>
                </div>

                <div class="bg-base-100">
                    {{ $slot }}

                </div>
              
            </main>
        </div>

        <!-- Sidebar -->
       <x-dashbord.layout.sidebar/>
    </div>

 <script>
        function themeSwitcher() {
            return {
                theme: '{{ $theme }}',
                init() {
                    document.documentElement.setAttribute('data-theme', this.theme);
                },
                toggle() {
                    this.theme = this.theme === 'dark' ? 'corporate' : 'dark';
                    document.documentElement.setAttribute('data-theme', this.theme);
                    document.cookie = `theme=${this.theme};path=/;max-age=2592000`; // 30 days
                }
            }
        }
    </script>
    @stack('scripts') 
</body>

</html>
