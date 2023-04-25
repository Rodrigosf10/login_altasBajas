require('./bootstrap');
import 'bootstrap';
import $ from 'jquery';
require('select2');
$('.select').select2();
import swal from 'sweetalert2';
window.swal = swal;