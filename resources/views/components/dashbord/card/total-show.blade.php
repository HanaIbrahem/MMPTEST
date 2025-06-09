@props(['title'=>null,'count'=>0,'color'=>'text-accent'])
<div class="stats shadow " >
    <div class="stat">
        <div class="stat-figure {{ $color }}">
           
            {{ $slot }}
        </div>
        <div class="stat-title text-lg">{{$title}}</div>
        <div class="stat-value {{ $color }} text-3xl">{{ $count }}</div>
    </div>
</div>