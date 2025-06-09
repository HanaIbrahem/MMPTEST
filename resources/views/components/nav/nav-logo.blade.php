@props(['togleshow' => false])
<div class="flex items-center gap-2">
    @if ($togleshow)
    <x-nav.toggle/> 
    @endif
 
    <a href="/">
    <img class="w-10 rounded"  src="./images/logo.png" alt="">
    
    </a>

</div>