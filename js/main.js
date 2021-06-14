// Script para data table
$(document).ready(function() {
    $('#tabla').DataTable({
    //para cambiar el lenguaje a español
        "language": {
            "lengthMenu": "Mostrando _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "",
            "infoEmpty": "",
            "infoFiltered": "(Buscado en un total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast":"Último",
                "sNext":"Siguiente",
                "sPrevious": "Anterior"
                },
                "sProcessing":"Procesando...",
        }
    });
});