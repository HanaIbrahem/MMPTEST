<x-dashbord.layout.app> 
    <div class="mb-4">
        <x-dashbord.form.container title="{{ isset($branche) ? 'Edit Category' : 'Create Category' }}">
            <x-dashbord.form.form 
                method="{{ isset($branche) ? 'PUT' : 'POST' }}" 
                action="{{ isset($branche) ? route('control.category.update', $branche->id) : route('control.category.store') }}" 
                enctype="multipart/form-data"
            >

                {{-- Multilingual Title --}}
                <x-dashbord.form.multilang-Input 
                    name="title" 
                    label="Title" 
                    :placeholders="['en' => 'Title', 'ku' => ' ناونیشان ']" 
                    :values="old('title', $branche->title ?? [])" 
                />

            
                {{-- Submit Button --}}
                <x-dashbord.form.button>
                    {{ isset($branche) ? 'Update' : 'Save' }}
                </x-dashbord.form.button>

            </x-dashbord.form.form>
        </x-dashbord.form.container>
    </div>

    <div class="my-2">
        <h1 class="text-xl text-primary font-semibold p-2 mb-4">
            Branches
        </h1>

        <x-dashbord.table.table>
            <x-dashbord.table.table-header>
                <th>No</th>
                <th>Title</th>
                <th>UpdatedAt</th>
                <th>CreatedAt</th>
                <th>Status</th>
                <th>Actions</th>
            </x-dashbord.table.table-header>
            <tbody>
                @foreach ($branches as $branche)
                    <x-dashbord.table.table-row>
                        <x-dashbord.table.table-col />
                        <x-dashbord.table.table-col :value="$branche->title['en'] ?? ''" />
                    
                        <x-dashbord.table.table-col :value="$branche->updated_at ?$branche->updated_at->format('Y-m-d  H:i') : $branche->updated_at" />
                        <x-dashbord.table.table-col :value="$branche->created_at ?$branche->created_at->format('Y-m-d  H:i') : $branche->created_at" />
                        <x-dashbord.table.table-col>
                            <x-dashbord.card.state :state="$branche->is_active" />
                        </x-dashbord.table.table-col>
                        <x-dashbord.table.table-col>
                            <x-dashbord.table.action-dropdown 
                                :edit-url="route('control.category.edit', $branche->id)" 
                                :delete-url="route('control.category.destroy', $branche->id)" 
                                :toggle-url="route('control.category.toggle', $branche->id)"
                                :show-url="route('control.category.show', $branche->id)" 
                                :is-active="$branche->is_active" />
                        </x-dashbord.table.table-col>
                    </x-dashbord.table.table-row>
                @endforeach
            </tbody>
        </x-dashbord.table.table>
    </div>
</x-dashbord.layout.app>
