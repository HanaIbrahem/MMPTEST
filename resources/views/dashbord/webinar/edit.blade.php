<x-dashbord.layout.app>

    <div class="mb-4">
        <x-dashbord.form.container title="{{ isset($webinar) ? 'Edit Webinar' : 'Create Webinar' }}">
            <x-dashbord.form.form 
                method="{{ isset($webinar) ? 'PUT' : 'POST' }}" 
                action="{{ isset($webinar) ? route('control.webienars.update', $webinar->id) : route('control.webienars.store') }}" 
                enctype="multipart/form-data">

                <x-dashbord.form.multilang-Input 
                    name="title" 
                    label="Title" 
                    :placeholders="['en' => 'Title', 'ku' => ' ناونیشان ']" 
                    :values="old('title', $webinar->title ?? [])" 
                />

                <x-dashbord.form.date :value="$webinar->date" lable="Date" name="date"/>

                 <x-dashbord.form.selectbox lable="Category" name="branch_id">

                    @foreach ($branches as $branche )
                        <option {{$branche->id ==$webinar->branch->id?'selected':''  }} value="{{ $branche->id }}">
                            {{ $branche->title['en'] }}
                        </option>
                    @endforeach
                </x-dashbord.form.selectbox>
                <x-dashbord.form.editor name="content" label="Content" :values="old('content', $webinar->content ?? [])" :placeholders="['en' => 'Enter content', 'ku' => ' ناوەڕۆک بنوسە']" />

           

                <x-dashbord.form.file-upload 
                       name="image" 
                    label="Image" 
                    :existing="$webinar->image ?? null" 
                />
                <x-dashbord.form.button>
                    {{ isset($webinar) ? 'Update' : 'Save' }}
                </x-dashbord.form.button>

            </x-dashbord.form.form>
        </x-dashbord.form.container>
    </div>
</x-dashbord.layout.app>