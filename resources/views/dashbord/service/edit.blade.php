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
</x-dashbord.layout.app>
