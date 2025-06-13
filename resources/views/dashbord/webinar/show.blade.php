<x-dashbord.layout.app>
    <div class="m-2">
        <h1 class="text-secondary">Show Webinar</h1>
        <x-dashbord.card.show-attributes label="Title" :values="$webinar->title" />
        <x-dashbord.card.show-attributes label="Content" :values="$webinar->content" />
        <x-dashbord.card.show-attributes label="Category" :values="$webinar->branch->title" />
        <x-dashbord.card.state :state="$webinar->is_active" />
        @if($webinar->image)
            <img src="{{ asset('storage/'.$webinar->image) }}" class="  max-w-1/2 mt-3">
        @endif

        <div class="mt-3">
        <x-dashbord.table.action-dropdown 
            :edit-url="route('control.webienars.edit', $webinar->id)"
            :delete-url="route('control.webienars.destroy', $webinar->id)" 
            :toggle-url="route('control.webienars.toggle', $webinar->id)"
            :show-url="route('control.webienars.show', $webinar->id)" 
            :is-active="$webinar->is_active"
        />
        </div>
    </div>
</x-dashbord.layout.app>
