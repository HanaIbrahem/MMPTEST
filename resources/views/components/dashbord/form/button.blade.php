@props(['type' => 'submit', 'class' => ''])

<button 
{{$attributes->merge(['class'=>"px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 transition my-3 $class"])}}
type="{{$type}}" >

    {{ $slot }}
</button>
