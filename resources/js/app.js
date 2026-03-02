import './bootstrap';
import Swal from 'sweetalert2';

window.showMessage = function(text) {
    Swal.fire(text);
}