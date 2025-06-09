@props([
    'name'=>'',
    'label' => '',
    'languages' => ['en' => 'English', 'ku' => 'Kurdish'],
    'placeholders' =>[],
    'values' => [],
])

<x-dashbord.form.lable>{{ $label }}</x-dashbord.form.lable>

<div role="tablist" class="tabs tabs-bordered">
    @foreach ($languages as $code => $lang)
        <input type="radio" 
               name="{{ $name }}_tab" 
               role="tab" 
               class="tab" 
               aria-label="{{ $lang }}" 
               @if ($loop->first) checked @endif />
        <div role="tabpanel" class="tab-content p-4">
            <label class="block mb-1 text-gray-700">{{ $label }} ({{ $lang }})</label>
            <input 
                type="text" 
                name="{{ $name }}[{{ $code }}]" 
                class="input input-bordered w-full"
                placeholder="{{ $placeholders[$code] ?? '' }}"
                value="{{ $values[$code] ?? '' }}"
                
            >
            <x-dashbord.form.error field="{{ $name }}.{{ $code }}" />

        </div>
    @endforeach
</div>
