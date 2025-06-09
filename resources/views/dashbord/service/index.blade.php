{{-- resources/views/control/services/create.blade.php OR edit.blade.php --}}
<x-dashbord.layout.app>
    <div class="mb-4">
        <x-dashbord.form.container title="{{ isset($service) ? 'Edit Service' : 'Create Service' }}">
            <x-dashbord.form.form 
                method="{{ isset($service) ? 'PUT' : 'POST' }}" 
                action="{{ isset($service) ? route('control.service.update', $service->id) : route('control.service.store') }}" 
                enctype="multipart/form-data"
            >

                {{-- Multilingual Title --}}
                <x-dashbord.form.multilang-Input 
                    name="title" 
                    label="Title" 
                    :placeholders="['en' => 'Title', 'ku' => ' ناونیشان ']" 
                    :values="old('title', $service->title ?? [])" 
                />

                {{-- Multilingual Rich Text Editor for Content --}}
                <x-dashbord.form.editor 
                    name="content" 
                    label="Content" 
                    :values="old('content', $service->content ?? [])" 
                    :placeholders="['en' => 'Enter content', 'ku' => ' ناوەڕۆک بنوسە']" 
                />

                {{-- Image Upload --}}
                <x-dashbord.form.file-upload 
                    name="image" 
                    label="Image" 
                    :existing="$service->image ?? null" 
                />

                {{-- Submit Button --}}
                <x-dashbord.form.button>
                    {{ isset($service) ? 'Update' : 'Save' }}
                </x-dashbord.form.button>

            </x-dashbord.form.form>
        </x-dashbord.form.container>
    </div>
    
        <div class="my-2 ">
            <h1 class="text-xl text-primary font-semibold p-2 mb-4">
                Services
            </h1>

            <x-dashbord.table.table>
    <x-dashbord.table.table-header>
        <th>No</th>
        <th>Title</th>
        <th>Image</th>
          <th>UpdateAt</th>
            <th>CreatedAt</th>
        <th>Status</th>
        <th>Actions</th>
    </x-dashbord.table.table-header>
    <tbody>
        @foreach ($services as $service)
            <x-dashbord.table.table-row>
                <x-dashbord.table.table-col/>
                <x-dashbord.table.table-col :value="$service->title['en'] ?? ''" />
                <x-dashbord.table.table-col>
                    @if ($service->image)
                        <img src="{{ asset('storage/' . $service->image) }}" width="60" />
                    @endif
                </x-dashbord.table.table-col>

                    <x-dashbord.table.table-col :value="$service->updated_at->format('Y-m-d  H:i')" />
                    <x-dashbord.table.table-col :value="$service->created_at->format('Y-m-d  H:i')" />
                <x-dashbord.table.table-col>
                    <x-dashbord.card.state :state="$service->is_active" />
                </x-dashbord.table.table-col>
                <x-dashbord.table.table-col>
                    <x-dashbord.table.action-dropdown 
                        :edit-url="route('control.service.edit', $service->id)" 
                        :delete-url="route('control.service.destroy', $service->id)" 
                        :toggle-url="route('control.service.toggle', $service->id)"
                        :show-url="route('control.service.show', $service->id)" 
                        :is-active="$service->is_active" />
                </x-dashbord.table.table-col>
            </x-dashbord.table.table-row>
        @endforeach
    </tbody>
</x-dashbord.table.table>
        </div>
</x-dashbord.layout.app>
