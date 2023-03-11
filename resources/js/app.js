require('./bootstrap');
import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';

import flatpickr from "flatpickr";

window.Alpine = Alpine;
window.Alpine.plugin(focus);
window.Alpine.start();
