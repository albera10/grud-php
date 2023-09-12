
$('#confirm-delete').on('show.bs.modal', function(e) {    
    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
    $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');    
});

var table = new DataTable('#myTable', {
    language: {
        url: './json/es-MX.json',
    },
}); 




/* 
$(document).ready( function () {
    $('#myTable').DataTable();
} ); */ 

/*
var table = new DataTable('#myTable', {
    language: {
        url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/es-MX.json',
    },
}); 
*/

