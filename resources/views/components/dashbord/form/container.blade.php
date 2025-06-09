@props([
    'title' => null,
])

<div {{ $attributes->merge(['class' => 'max-w-2xl ps-4 mt-10 rounded-xl shadow']) }}>
    @if ($title)
        <h2 class="text-xl font-semibold mb-4 text-primary">{{ $title }}</h2>
    @endif

    {{ $slot }}
</div>
