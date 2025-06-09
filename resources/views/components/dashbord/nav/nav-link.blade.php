@props(['active' => false, 'href','title'=>''])

@php
    $classes = $active
        ? 'text-primary '  // Active: use primary
        : 'hover:text-primary focus:text-blue-800 transition-colors duration-200'; // Default + Hover/Focus
@endphp

<li>
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
        {{ $title }}
    </a>
</li>
