@props(['method' => 'POST', 'action'])
<form method="POST" action="{{ $action }}"  enctype="multipart/form-data">
    @csrf

    @if (strtoupper($method) !== 'POST')
        @method($method)
    @endif
    
    {{ $slot }}
</form>
