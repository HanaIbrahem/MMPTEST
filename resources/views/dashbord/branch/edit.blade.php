<x-dashbord.layout.app>


     <div class="mb-4">
     <x-dashbord.form.container title="{{ isset($branch) ? 'Edit Category' : 'Create Category' }}">
         <x-dashbord.form.form method="{{ isset($branch) ? 'PUT' : 'POST' }}"
             action="{{ isset($branch) ? route('control.category.update', $branch->id) : route('control.category.store') }}"
             enctype="multipart/form-data">

             {{-- Multilingual Title --}}
             <x-dashbord.form.multilang-Input name="title" label="Title" :placeholders="['en' => 'Title', 'ku' => ' ناونیشان ']" :values="old('title', $branch->title ?? [])" />


             {{-- Submit Button --}}
             <x-dashbord.form.button>
                 {{ isset($branch) ? 'Update' : 'Save' }}
             </x-dashbord.form.button>

         </x-dashbord.form.form>
     </x-dashbord.form.container>
 </div


</x-dashbord.layout.app>