@props(['state'=>false])

<span class="px-2 py-1 rounded text-xs {{ $state ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
    {{ $state ? 'Active' : 'Inactive' }}
</span>
