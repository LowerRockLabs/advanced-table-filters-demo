require('./bootstrap');

require('../../node_modules/alpinejs')
require('../../node_modules/@alpinejs/focus')
require('../../node_modules/flatpickr')
window.Alpine = Alpine;
window.Alpine.plugin(focus);
window.Alpine.start();

