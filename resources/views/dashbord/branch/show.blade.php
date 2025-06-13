<x-dashbord.layout.app>
    <div class="m-2">
        <h1 class="text-secondary">Show Category</h1>
        <x-dashbord.card.show-attributes label="Title" :values="$branch->title" />
        <x-dashbord.card.state :state="$branch->is_active" />

     

        <div class="mt-3">
            <x-dashbord.table.action-dropdown 
                :edit-url="route('control.category.edit', $branch->id)"
                :delete-url="route('control.category.destroy', $branch->id)" 
                :toggle-url="route('control.category.toggle', $branch->id)"
                :show-url="route('control.category.show', $branch->id)" 
                :is-active="$branch->is_active"
            />
        </div>
    </div>
</x-dashbord.layout.app>
