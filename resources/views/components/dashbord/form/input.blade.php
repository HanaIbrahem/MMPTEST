@props([
    'name' => '',
    'label' => '',
    'placeholder' => '',
    'value' => [],
])

@php
    // Safe way to handle the value - check if it's already an array
    if (is_string($value)) {
        $decodedValue = json_decode($value, true) ?? [];
    } elseif (is_array($value)) {
        $decodedValue = $value;
    } else {
        $decodedValue = [];
    }
    
    // Ensure we have a valid array
    $decodedValue = is_array($decodedValue) ? $decodedValue : [];
@endphp

<div class="my-4 py-2">
    <x-dashbord.form.lable>{{ $label }}</x-dashbord.form.lable>
    
    <!-- Only English Input - Kurdish will be auto-filled by controller -->
    <input 
        name="{{ $name }}[en]" 
        class="input input-bordered w-full"
        placeholder="{{ $placeholder }}"
        value="{{ old($name . '.en', $decodedValue['en'] ?? '') }}"
    >
    
    <x-dashbord.form.error :field="$name . '.en'" />
</div>