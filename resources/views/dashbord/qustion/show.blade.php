<x-dashbord.layout.app>



    <div class="m-2">

        <h1 class="text-secondary ">Show Question</h1>

        <x-dashbord.card.show-attributes
        label="Question"
        :values="$question->title" 
        />

        <x-dashbord.card.show-attributes
        label="Answer"
        :values="$question->content" 
        />

        <x-dashbord.card.state :state="$question->is_active"/>
    
        <div class="d-block mt-3">
            <x-dashbord.table.action-dropdown 
            :edit-url="route('control.qustions.edit', $question->id)"
            :delete-url="route('control.qustions.destroy', $question->id)" 
            :toggle-url="route('control.qustions.toggle', $question->id)"
            :is-active="$question->is_active"
            :show-Url="route('control.qustions.show' , $question->id)" />

        </div>
        </div>
</x-dashbord.layout.app>