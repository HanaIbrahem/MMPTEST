@props([
    'name',
    'label' => 'Pick a file',
    'message' => '',
    'preview' => true,
    'existing' => null, // Path to existing image
])

<fieldset class="fieldset border-2 border-gray-300 p-3">
    <legend class="fieldset-legend">{{ $label }}</legend>

    <input 
        type="file" 
        name="{{ $name }}" 
        id="{{ $name }}" 
        {{ $attributes->merge(['class' => 'file-input']) }}
        @if ($preview) onchange="previewImage{{ $name }}(event)" @endif
    />

    <label class="label block mt-1 text-sm text-gray-500">{{ $message }}</label>

    @if ($preview)
        <div class="mt-4">
            <img 
                id="{{ $name }}-preview" 
                src="{{ $existing ? asset('storage/'.$existing) : '' }}" 
                class="rounded {{ $existing ? '' : 'hidden' }}" 
                style="max-width: 100px; max-height: 100px;" 
                alt="Preview"
            >
        </div>
    @endif

    <x-dashbord.form.error :field="$name" />
</fieldset>

@push('scripts')
<script>
    function previewImage{{ $name }}(event) {
        const input = event.target;
        const preview = document.getElementById('{{ $name }}-preview');

        if (input.files && input.files[0]) {
            const file = input.files[0];
            const reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.classList.remove('hidden');
            };

            if (file.type.startsWith('image/')) {
                reader.readAsDataURL(file);
            } else {
                preview.src = '';
                preview.classList.add('hidden');
            }
        }
    }
</script>
@endpush
