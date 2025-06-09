@php
    $loc=app()->getLocale();
@endphp
<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', $loc) }}" 
      data-theme="corporate"
      dir="{{ $loc === 'ku' ? 'rtl' : 'ltr' }}"
      class="{{ $loc === 'ku' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $loc === 'ku' ? ' ئەکادیمیای مێگا مایند پلەس' : 'MMP Academy' }}</title>

    <!-- Fonts -->
    <link rel="icon" href="{{ asset('images/Logo.png') }}" type="image/png">

    <link rel="preconnect" href="https://fonts.bunny.net">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="md:px-4  {{ $loc === 'ku' ? 'font-cairo' : 'font-poppins'  }}">
{{-- 
    <button @click="toggle()" class="btn mb-4">
        Toggle Theme (Current: <span x-text="theme"></span>)
    </button> --}}

    <x-layout.header />

    {{ $slot }}

    <x-layout.footer class="" />

</body>
</html>

  