<x-dashbord.layout.app> 
    <div class="mb-4">
        <x-dashbord.form.container title="{{ isset($product) ? 'Edit Product' : 'Create Product' }}">
            <x-dashbord.form.form 
                method="{{ isset($product) ? 'PUT' : 'POST' }}" 
                action="{{ isset($product) ? route('control.product.update', $product->id) : route('control.product.store') }}" 
                enctype="multipart/form-data"
            >

                {{-- Multilingual Title --}}
                <x-dashbord.form.multilang-Input 
                    name="title" 
                    label="Title" 
                    :placeholders="['en' => 'Title', 'ku' => ' ناونیشان ']" 
                    :values="old('title', $product->title ?? [])" 
                />

                {{-- Multilingual Rich Text Editor for Content --}}
                <x-dashbord.form.editor 
                    name="content" 
                    label="Content" 
                    :values="old('content', $product->content ?? [])" 
                    :placeholders="['en' => 'Enter content', 'ku' => ' ناوەڕۆک بنوسە']" 
                />

                {{-- Image Upload --}}
                <x-dashbord.form.file-upload 
                    name="image" 
                    label="Image" 
                    :existing="$product->image ?? null" 
                />

                {{-- Submit Button --}}
                <x-dashbord.form.button>
                    {{ isset($product) ? 'Update' : 'Save' }}
                </x-dashbord.form.button>

            </x-dashbord.form.form>
        </x-dashbord.form.container>
    </div>

    <div class="my-2">
        <h1 class="text-xl text-primary font-semibold p-2 mb-4">
            Products
        </h1>

        <x-dashbord.table.table>
            <x-dashbord.table.table-header>
                <th>No</th>
                <th>Title</th>
                <th>Image</th>
                <th>UpdatedAt</th>
                <th>CreatedAt</th>
                <th>Status</th>
                <th>Actions</th>
            </x-dashbord.table.table-header>
            <tbody>
                @foreach ($products as $product)
                    <x-dashbord.table.table-row>
                        <x-dashbord.table.table-col />
                        <x-dashbord.table.table-col :value="$product->title['en'] ?? ''" />
                        <x-dashbord.table.table-col>
                            @if ($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}" width="60" />
                            @endif
                        </x-dashbord.table.table-col>
                        <x-dashbord.table.table-col :value="$product->updated_at->format('Y-m-d  H:i')" />
                        <x-dashbord.table.table-col :value="$product->created_at->format('Y-m-d  H:i')" />
                        <x-dashbord.table.table-col>
                            <x-dashbord.card.state :state="$product->is_active" />
                        </x-dashbord.table.table-col>
                        <x-dashbord.table.table-col>
                            <x-dashbord.table.action-dropdown 
                                :edit-url="route('control.product.edit', $product->id)" 
                                :delete-url="route('control.product.destroy', $product->id)" 
                                :toggle-url="route('control.product.toggle', $product->id)"
                                :show-url="route('control.product.show', $product->id)" 
                                :is-active="$product->is_active" />
                        </x-dashbord.table.table-col>
                    </x-dashbord.table.table-row>
                @endforeach
            </tbody>
        </x-dashbord.table.table>
    </div>
</x-dashbord.layout.app>
