$(document).ready(function(){
    var url = $('#rutaListar').val()
    var table = $('.data-table').DataTable({
        processing: true,
        serverside: true,
        ajax: url,
        language: {
            searchPanes: {
                collapse: 'Filtros',
                title: {
                    _: 'Filters Selected - %d',
                    0: 'No Filters Selected',
                    1: 'One Filter Selected'
                }
            }
        },
        searchPanes: {
            viewTotal: true,
            columns: [ 1 ],
            orderable: false
        },
        buttons: [
            { extend: 'searchPanes', className: 'btn btn-primary boton-blanco' },
        ],
        dom: 'Blfrtip',
        columns: [
            {data: 'id', name: 'id'},
            {data: 'titulo', name: 'titulo'},
            {data: 'action', orderable:false, searchable:false},
        ],
        columnDefs: [
            { searchPanes: { show: true }, targets: [1] },
            { searchPanes: { show: false }, targets: [0] }
        ]
    })
})