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

</x-dashbord.layout.app>