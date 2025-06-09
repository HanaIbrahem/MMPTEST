@props([
    'name' => '',
    'label' => '',
    'languages' => ['en' => 'English', 'ku' => 'Kurdish'],
    'placeholders' => [],
    'values' => [],
    'class'=>''
])

<x-dashbord.form.lable>{{ $label }}</x-dashbord.form.lable>

<div role="tablist" class="tabs tabs-bordered">
    @foreach ($languages as $code => $lang)
        <input 
            type="radio" 
            name="{{ $name }}_tab" 
            role="tab" 
            class="tab" 
            aria-label="{{ $lang }}" 
            @if ($loop->first) checked @endif 
        />
        <div role="tabpanel" class="tab-content p-4">
            <label class="block mb-1 text-gray-700">{{ $label }} ({{ $lang }})</label>

            <textarea
                name="{{ $name }}[{{ $code }}]"
                class="textarea textarea-bordered w-full {{ $class }}"
                placeholder="{{ $placeholders[$code] ?? '' }}"
                rows="3"
            >{{ $values[$code] ?? '' }}</textarea>

            <x-dashbord.form.error field="{{ $name }}.{{ $code }}" />
        </div>
    @endforeach
</div>
