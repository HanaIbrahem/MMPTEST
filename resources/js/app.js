import './bootstrap';
import Alpine from 'alpinejs';
import TomSelect from 'tom-select';
import 'tom-select/dist/css/tom-select.css';



window.Alpine= Alpine;

Alpine.start();

document.addEventListener('DOMContentLoaded', () => {
    new TomSelect('#branch-filter', {
        allowEmptyOption: true,
        dropdownWidth: 'auto', // or set a fixed value like '300px'
    });
});
document.addEventListener('DOMContentLoaded', () => {
    new TomSelect('#year-filter', {
        allowEmptyOption: true,
        dropdownWidth: 'auto', // or set a fixed value like '300px'
    });
});

