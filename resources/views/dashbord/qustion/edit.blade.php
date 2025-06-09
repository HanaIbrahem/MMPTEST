<x-dashbord.layout.app>

    <div class="mb-4">

        <x-dashbord.form.container title="Edit Question">

            <x-dashbord.form.form method="PUT" action="{{ route('control.qustions.update', $question->id) }}">

                <x-dashbord.form.multilang-Input 
                    name="title" 
                    label="Question" 
                    :placeholders="['en' => 'Question', 'ku' => ' پرسیار ']" 
                    :values="old('title', $question->title)" 
                />

                <x-dashbord.form.textarea 
                    name="content" 
                    label="Answer" 
                    :placeholders="['en' => 'Answer', 'ku' => ' وەڵام ']" 
                    :values="old('content', $question->content)" 
                />

                <x-dashbord.form.button>
                    Update
                </x-dashbord.form.button>

            </x-dashbord.form.form>

        </x-dashbord.form.container>

    </div>

</x-dashbord.layout.app>
