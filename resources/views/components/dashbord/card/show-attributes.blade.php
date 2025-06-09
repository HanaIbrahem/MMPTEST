@props([
    'label' => '',
    'values' => [],
    'languages' => ['en' => 'English', 'ku' => 'Kurdish'],
])

<h2 class="text-lg font-semibold mb-2">{{ $label }}</h2>

<div role="tablist" class="tabs tabs-bordered">
    @foreach ($languages as $code => $lang)
        <input type="radio" 
               name="{{ Str::slug($label) }}_tab" 
               role="tab" 
               class="tab" 
               aria-label="{{ $lang }}" 
               @if ($loop->first) checked @endif />
        <div role="tabpanel" class="tab-content p-4">
            <h3 class="text-md font-medium text-gray-700 mb-1">
                {{ $label }} ({{ $lang }})
            </h3>
            <div class="p-2 bg-gray-50">

            <p class="p-1   rounded text-gray-800 leading-relaxed">
                {!! $values[$code] ?? '-' !!}
            </p>
            </div>

        </div>
    @endforeach
</div>