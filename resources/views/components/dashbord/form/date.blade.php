
@props([
    'lable'=>'',
    'name'=>'',
    'value'=> '',
])
<div x-data="{ today: (new Date()).toISOString().split('T')[0] }" class="max-w-sm">
<x-dashbord.form.lable>{{ $lable }}</x-dashbord.form.lable>
   
    <input type="date" 
           id="{{ $name }}" 
           name="{{ $name }}" 
           class="w-full border border-gray-300 rounded-lg shadow-sm p-2 focus:ring focus:ring-blue-200 focus:outline-none"
           x-bind:value="{{ $value ? '' : 'today' }}" {{-- only use Alpine if no value passed --}}
           @if ($value) value="{{ $value }}" @endif
           >
    <x-dashbord.form.error field="{{ $name }}" />
    
</div>

