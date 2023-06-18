require('./bootstrap');
import 'jquery-ui/ui/widgets/sortable';
require('chart.js');
require('alpinejs');
require('select2');
const Swal = require('sweetalert2');
const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
    //   toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  })



    