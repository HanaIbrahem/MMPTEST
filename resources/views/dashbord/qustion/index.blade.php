<x-dashbord.layout.app>

    <div class="mb-4">

        <x-dashbord.form.container title="Create Question">

            <x-dashbord.form.form method="POST" action="{{ route('control.qustions.store') }}">

                <x-dashbord.form.multilang-Input name="title" label="Question" :placeholders="['en' => 'َQuestion', 'ku' => ' پرسیار ']" :values="old('title') ?? ['en' => '', 'ku' => '']" />

                <x-dashbord.form.textarea name="content" label="Answer" :placeholders="['en' => 'Answer', 'ku' => ' وەڵام ']" :values="old('title') ?? ['en' => '', 'ku' => '']" />

                <x-dashbord.form.button>

                    Save
                </x-dashbord.form.button>

            </x-dashbord.form.form>

        </x-dashbord.form.container>
    </div>
    
    <div class="my-2">
        <h1 class="text-xl text-primary font-semibold p-2 mb-4">
        Questions
    </h1>
        <x-dashbord.table.table>

        <x-dashbord.table.table-header>
            <th>No</th>
            <th>Title</th>
            <th>Detail</th>
            <th>UpdateAt</th>
            <th>CreatedAt</th>
            <th>State</th>

            <th>Actions</th>
        </x-dashbord.table.table-header>

        <tbody>

            @foreach ($questions as $question)
                <x-dashbord.table.table-row>
                    <x-dashbord.table.table-col />

                    <x-dashbord.table.table-col :value="$question->title['en']" />
                    <x-dashbord.table.table-col :value="$question->content['en']" />
                    <x-dashbord.table.table-col :value="$question->updated_at->format('Y-m-d  H:i')" />
                    <x-dashbord.table.table-col :value="$question->created_at->format('Y-m-d  H:i')" />
                    <x-dashbord.table.table-col>

                        <x-dashbord.card.state :state="$question->is_active" />
                    </x-dashbord.table.table-col>


                    <x-dashbord.table.table-col>
                        <x-dashbord.table.action-dropdown 
                        :edit-url="route('control.qustions.edit', $question->id)"
                        :delete-url="route('control.qustions.destroy', $question->id)" 
                        :toggle-url="route('control.qustions.toggle', $question->id)"
                        :show-Url="route('control.qustions.show',$question->id)"
                        :is-active="$question->is_active" />


                    </x-dashbord.table.table-col>

                </x-dashbord.table.table-row>
            @endforeach


        </tbody>
    </x-dashbord.table.table>
    </div>


</x-dashbord.layout.app>
