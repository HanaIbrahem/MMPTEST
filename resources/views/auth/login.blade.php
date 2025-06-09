{{-- @php
if (!isset($_COOKIE['theme'])) {
    setcookie('theme', 'corporate', time() + (86400 * 30), '/');
}
$theme = $_COOKIE['theme'] ?? 'corporate';
@endphp --}}

<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}" 
      data-theme="corporate"
      dir="{{ app()->getLocale() === 'ku' ? 'rtl' : 'ltr' }}"
      class="{{ app()->getLocale() === 'ku' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME') }}</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="min-h-screen flex items-center justify-center bg-gray-100">

    <div class="w-full max-w-md bg-white shadow-lg rounded-xl p-8 space-y-6">

        <div class="flex justify-center">
       <x-nav.nav-logo/>

        </div>
        <div class="text-center">

            <h1 class="text-2xl font-bold text-gray-800">Welcome Back</h1>
            <p class="text-sm text-gray-500">Please log in to dashbord</p>
        </div>

        @if ($errors->any())
            <div class="bg-red-100 text-red-400 p-3 rounded">
                <ul class="text-sm space-y-1 list-none">
                    @foreach ($errors->all() as $error)
                        <li>• {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('login.store') }}" method="POST" class="space-y-4 px-2">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                <input 
                    type="email" 
                    name="email" 
                    id="email"
                    value="{{ old('email') }}"
                    required 
                    autofocus 
                    class="mt-1 px-3 py-1 block w-full border-2 border-blue-300  rounded-lg  shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none"
                >
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input 
                    type="password" 
                    name="password" 
                    id="password" 
                    required 
                    class="mt-1 px-3 py-1 block w-full  rounded-lg border-2 border-blue-300 shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none"
                >
            </div>


            
     
            <button type="submit" class=" w-full bg-primary text-white py-2 rounded-lg  transition">
                Log In
            </button>
        </form>

     
    </div>

</body>
</html>

  