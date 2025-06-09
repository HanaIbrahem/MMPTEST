@props([
    'name' => '',
    'label' => '',
    'languages' => ['en' => 'English', 'ku' => 'Kurdish'],
    'placeholders' => [],
    'values' => [],
    'class' => '',
])

<x-dashbord.form.lable>{{ $label }}</x-dashbord.form.lable>

<div role="tablist" class="tabs tabs-bordered">
    @foreach ($languages as $code => $lang)
        <input 
            type="radio" 
            name="{{ $name }}_tab" 
            role="tab" 
            class="tab" 
            aria-label="{{ $lang }}" 
            @if ($loop->first) checked @endif 
        />
        <div role="tabpanel" class="tab-content p-4">
            <label class="block mb-1 text-gray-700">{{ $label }} ({{ $lang }})</label>

            <div 
                class="rich-editor border border-gray-300 rounded p-2 min-h-[200px]" 
                contenteditable="true" 
                data-target="{{ $name }}_{{ $code }}"
            >{!! old("$name.$code", $values[$code] ?? '') !!}</div>

            <input 
                type="hidden" 
                name="{{ $name }}[{{ $code }}]" 
                id="{{ $name }}_{{ $code }}" 
                value="{{ old("$name.$code", $values[$code] ?? '') }}"
            >

            <x-dashbord.form.error field="{{ $name }}.{{ $code }}" />
        </div>
    @endforeach
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
    // Handle all rich editors
    document.querySelectorAll('.rich-editor').forEach(editor => {
        const target = editor.getAttribute('data-target');
        const hiddenInput = document.getElementById(target);
        
        // Function to check if content is actually empty
        function isContentEmpty(html) {
            // Remove HTML tags and check if there's actual text content
            const tempDiv = document.createElement('div');
            tempDiv.innerHTML = html;
            const textContent = tempDiv.textContent || tempDiv.innerText || '';
            
            // Also check for common empty patterns
            const emptyPatterns = [
                '<p><br></p>',
                '<p></p>',
                '<div><br></div>',
                '<div></div>',
                '<br>',
                ''
            ];
            
            return textContent.trim() === '' || emptyPatterns.includes(html.trim());
        }
        
        // Function to update hidden input with validation
        function updateHiddenInput() {
            let content = editor.innerHTML;
            
            // If content is empty, set hidden input to empty string
            if (isContentEmpty(content)) {
                hiddenInput.value = '';
            } else {
                hiddenInput.value = content;
            }
            
            // Trigger validation events
            hiddenInput.dispatchEvent(new Event('input', { bubbles: true }));
            hiddenInput.dispatchEvent(new Event('change', { bubbles: true }));
        }
        
        // Handle content changes
        ['input', 'keyup', 'paste', 'blur'].forEach(event => {
            editor.addEventListener(event, function() {
                setTimeout(updateHiddenInput, 10); // Small delay for paste events
            });
        });
        
        // Handle toolbar button clicks
        document.querySelectorAll('.toolbar-btn').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                const command = this.dataset.command;
                const targetEditor = this.closest('.tab-content').querySelector('.rich-editor');
                
                if (targetEditor === editor) {
                    targetEditor.focus();
                    document.execCommand(command, false, null);
                    setTimeout(updateHiddenInput, 10);
                }
            });
        });
        
        // Initial validation
        updateHiddenInput();
    });
    
    // Handle form submission validation
    document.addEventListener('submit', function(e) {
        let hasValidationErrors = false;
        
        document.querySelectorAll('.rich-editor').forEach(editor => {
            const target = editor.getAttribute('data-target');
            const hiddenInput = document.getElementById(target);
            const content = editor.innerHTML;
            
            // Check if field is required
            const isRequired = hiddenInput.hasAttribute('required') || 
                              hiddenInput.closest('form').querySelector(input[name="${hiddenInput.name}"][required]);
            
            if (isRequired) {
                const tempDiv = document.createElement('div');
                tempDiv.innerHTML = content;
                const textContent = tempDiv.textContent || tempDiv.innerText || '';
                
                if (textContent.trim() === '') {
                    hasValidationErrors = true;
                    
                    // Add visual feedback
                    editor.style.borderColor = '#ef4444';
                    editor.style.boxShadow = '0 0 0 3px rgba(239, 68, 68, 0.1)';
                    
                    // Show error message
                    let errorElement = editor.parentNode.querySelector('.validation-error');
                    if (!errorElement) {
                        errorElement = document.createElement('div');
                        errorElement.className = 'validation-error text-red-500 text-sm mt-1';
                        editor.parentNode.appendChild(errorElement);
                    }
                    errorElement.textContent = 'This field is required.';
                } else {
                    // Remove error styling
                    editor.style.borderColor = '';
                    editor.style.boxShadow = '';
                    
                    const errorElement = editor.parentNode.querySelector('.validation-error');
                    if (errorElement) {
                        errorElement.remove();
                    }
                }
            }
        });
        
        if (hasValidationErrors) {
            e.preventDefault();
            return false;
        }
    });
});
</script>
@endpush
