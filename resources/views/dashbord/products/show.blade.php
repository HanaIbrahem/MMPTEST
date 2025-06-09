<x-dashbord.layout.app>
    <div class="m-2">
        <h1 class="text-secondary">Show Product</h1>
        <x-dashbord.card.show-attributes label="Title" :values="$product->title" />
        <x-dashbord.card.show-attributes label="Content" :values="$product->content" />
        <x-dashbord.card.state :state="$product->is_active" />

        @if($product->image)
            <img src="{{ asset('storage/'.$product->image) }}" class="max-w-1/2 mt-3">
        @endif

        <div class="mt-3">
            <x-dashbord.table.action-dropdown 
                :edit-url="route('control.product.edit', $product->id)"
                :delete-url="route('control.product.destroy', $product->id)" 
                :toggle-url="route('control.product.toggle', $product->id)"
                :show-url="route('control.product.show', $product->id)" 
                :is-active="$product->is_active"
            />
        </div>
    </div>
</x-dashbord.layout.app>
