<x-dashbord.layout.app>


    <div class="mb-4">
        <x-dashbord.form.container title="{{ isset($webinar) ? 'Edit Webinar' : 'Create Webinar' }}">
            <x-dashbord.form.form method="{{ isset($webinar) ? 'PUT' : 'POST' }}"
                action="{{ isset($webinar) ? route('control.webienars.update', $webinar->id) : route('control.webienars.store') }}"
                enctype="multipart/form-data">

                <x-dashbord.form.multilang-Input name="title" label="Title" :placeholders="['en' => 'Title', 'ku' => ' ناونیشان ']" :values="old('title', $webinar->title ?? [])" />



                <x-dashbord.form.editor name="content" label="Content" :values="old('content', $webinar->content ?? [])" :placeholders="['en' => 'Enter content', 'ku' => ' ناوەڕۆک بنوسە']" />



                <x-dashbord.form.file-upload name="image" label="Image" :existing="$webinar->image ?? null" />
                <x-dashbord.form.button>
                    {{ isset($webinar) ? 'Update' : 'Save' }}
                </x-dashbord.form.button>

            </x-dashbord.form.form>
        </x-dashbord.form.container>
    </div>

    <div class="mb-4">

        <div class="my-2">
            <h1 class="text-xl text-primary font-semibold p-2 mb-4">
                Webienars
            </h1>
            <x-dashbord.table.table>
                <x-dashbord.table.table-header>
                    <th>No</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Updated At</th>
                    <th>Created At</th>
                    <th>State</th>
                    <th>Actions</th>
                </x-dashbord.table.table-header>
                <tbody>
                    @foreach ($webinars as $webinar)
                        <x-dashbord.table.table-row>
                            <x-dashbord.table.table-col />
                            <x-dashbord.table.table-col :value="$webinar->title['en'] ?? ''" />
                            <x-dashbord.table.table-col>
                                <img src="{{ asset('storage/' . $webinar->image) }}" width="60">

                            </x-dashbord.table.table-col>
                            <x-dashbord.table.table-col :value="$webinar->updated_at->format('Y-m-d H:i')" />
                            <x-dashbord.table.table-col :value="$webinar->created_at->format('Y-m-d H:i')" />
                            <x-dashbord.table.table-col>
                                <x-dashbord.card.state :state="$webinar->is_active" />
                            </x-dashbord.table.table-col>
                            <x-dashbord.table.table-col>
                                <x-dashbord.table.action-dropdown :edit-url="route('control.webienars.edit', $webinar->id)" :delete-url="route('control.webienars.destroy', $webinar->id)"
                                    :toggle-url="route('control.webienars.toggle', $webinar->id)" :show-url="route('control.webienars.show', $webinar->id)" :is-active="$webinar->is_active" />
                            </x-dashbord.table.table-col>
                        </x-dashbord.table.table-row>
                    @endforeach
                </tbody>
            </x-dashbord.table.table>
        </div>
</x-dashbord.layout.app>
