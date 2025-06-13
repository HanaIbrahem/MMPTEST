import './bootstrap';
import $ from 'jquery';
import 'datatables.net';
import 'datatables.net-dt/css/dataTables.dataTables.css';
import Alpine from 'alpinejs';



// Import Buttons extension
import 'datatables.net-buttons';
import 'datatables.net-buttons-dt';
// import 'datatables.net-buttons/css/buttons.dataTables.css';

// Import specific button types
import 'datatables.net-buttons/js/buttons.html5.js';
import 'datatables.net-buttons/js/buttons.print.js';
import 'datatables.net-buttons-dt/css/buttons.dataTables.css';

// select box
import TomSelect from 'tom-select';
import 'tom-select/dist/css/tom-select.css';
// Import JSZip for Excel export
import JSZip from 'jszip';
window.JSZip = JSZip;
window.Alpine= Alpine;
Alpine.start();
window.$ = $;
window.jQuery = $;
// Initialize DataTables
$(document).ready(function () {
    if ($('#dataTable').length > 0) {
        $('#dataTable').DataTable({
            responsive: true,
            pageLength: 25,
             targets: 0,
            order: [[0, 'desc']],
              drawCallback: function(settings) {
        const api = this.api();
        api.column(0, { search: 'applied', order: 'applied' })
            .nodes()
            .each(function(cell, i) {
                cell.innerHTML = i + 1;
            });
    },
            // Flex container for buttons + search
            dom: '<"flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2 mb-4"fB>rt<"mt-4"lip>',
            buttons: [
                {
                    extend: 'excel',
                    text: 'Export Excel',
                    className: 'btn btn-primary btn-sm',
                    filename: 'data-export',
                },
                {
                    extend: 'csv',
                    text: 'Export CSV',
                    className: 'btn btn-primary btn-sm',
                },
                {
                    extend: 'print',
                    text: 'Print',
                    className: 'btn btn-primary btn-sm',
                }
            ],
            language: {
                search: "Search:",
                lengthMenu: "Show _MENU_ entries",
                info: "Showing _START_ to _END_ of _TOTAL_ entries",
                emptyTable: "No data available in table",
                zeroRecords: "No matching records found",
                paginate: {
                    first: "First",
                    last: "Last",
                    next: "Next",
                    previous: "Previous"
                }
            }
        });
    }
});


import DecoupledDocumentEditor from '@ckeditor/ckeditor5-build-decoupled-document';

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.rich-editor').forEach(editorElement => {
        const target = editorElement.getAttribute('data-target');
        const hiddenInput = document.getElementById(target);

        DecoupledDocumentEditor
            .create(editorElement, {
                toolbar: {
                    items: [
                        'heading',
                        '|',
                        'fontSize',
                        'fontFamily',
                        '|',
                        'bold',
                        'italic',
                        'underline',
                        'strikethrough',
                        '|',
                        'fontColor',
                        'fontBackgroundColor',
                        '|',
                        'alignment:left',
                        'alignment:center',
                        'alignment:right', 
                        'alignment:justify',
                        '|',
                        'bulletedList',
                        'numberedList',
                        '|',
                        'outdent',
                        'indent',
                        '|',
                        'link',
                        
                        'blockQuote',
                        'insertTable',
                        '|',
                        'undo',
                        'redo'
                    ]
                },
                alignment: {
                    options: [
                        { name: 'left', className: 'text-left' },
                        { name: 'center', className: 'text-center' },
                        { name: 'right', className: 'text-right' },
                        { name: 'justify', className: 'text-justify' }
                    ]
                }
            })
            .then(editor => {
                // Add the toolbar to the container
                const toolbarContainer = document.createElement('div');
                toolbarContainer.classList.add('editor-toolbar');
                editorElement.parentNode.insertBefore(toolbarContainer, editorElement);
                toolbarContainer.appendChild(editor.ui.view.toolbar.element);

                // Set initial value from hidden input
                if (hiddenInput && hiddenInput.value) {
                    editor.setData(hiddenInput.value);
                }

                // Update hidden input when content changes
                editor.model.document.on('change:data', () => {
                    hiddenInput.value = editor.getData();
                });
            })
            .catch(error => {
                console.error('CKEditor initialization error:', error);
            });
    });
});




// tom select box
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.tom-select').forEach(select => {
        new TomSelect(select);
    });
});