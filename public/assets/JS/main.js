import flatpickr from 'flatpickr';
import 'public/node_modules/flatpickr/dist/flatpickr.css';
const flatpickr = require("flatpickr");

document.addEventListener('DOMContentLoaded', function () {
    flatpickr("#datepicker", {
        dateFormat: "Y-m-d", // Format tanggal
        // Anda dapat menambahkan konfigurasi tambahan sesuai kebutuhan
    });
});

$(document).ready(function() {
    $('#close-button').click(function() {
        $('#element-to-close').hide();
    });
});