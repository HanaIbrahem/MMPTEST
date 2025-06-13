@props([
    'lable' => '',
    'name' => '',
])
<div role="tablist" class="tabs tabs-bordered my-4">


    <x-dashbord.form.lable>{{ $lable }}</x-dashbord.form.lable>

    <select id="{{ $name }}" name="{{ $name }}" class="tom-select w-full">

        {{ $slot }}
    </select>

    <x-dashbord.form.error field="{{ $name }}" />


</div>
