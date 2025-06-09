<x-dashbord.layout.app>
    <div class="m-2">
        <h1 class="text-secondary">Show Service</h1>
        <x-dashbord.card.show-attributes label="Title" :values="$service->title" />
        <x-dashbord.card.show-attributes label="Content" :values="$service->content" />
        <x-dashbord.card.state :state="$service->is_active" />
        @if($service->image)
            <img src="{{ asset('storage/'.$service->image) }}" class="  max-w-1/2 mt-3">
        @endif

        <div class="mt-3">
        <x-dashbord.table.action-dropdown 
            :edit-url="route('control.webienars.edit', $service->id)"
            :delete-url="route('control.webienars.destroy', $service->id)" 
            :toggle-url="route('control.webienars.toggle', $service->id)"
            :show-url="route('control.webienars.show', $service->id)" 
            :is-active="$service->is_active"
        />
        </div>
    </div>
</x-dashbord.layout.app>
