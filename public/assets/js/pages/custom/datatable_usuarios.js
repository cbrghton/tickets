$(function() {
    // Table setup
    // ------------------------------

    // Setting datatable defaults
    $.extend( $.fn.dataTable.defaults, {
        autoWidth: false,
        stateSave: true,
        columnDefs: [{
            orderable: false,
            width: '100px',
            targets: [ 4 ]
        }],
        dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
        language: {
            search: '<span>Buscar:</span> _INPUT_',
            lengthMenu: '<span>Mostrar:</span> _MENU_',
            paginate: { 'first': 'Primero', 'last': 'Ultimo', 'next': '&rarr;', 'previous': '&larr;' },
            zeroRecords: "0 Resultados",
            infoEmpty: "No se tiene resultados.",
            infoFiltered: "(Encontrado de _MAX_ registros)",
            info: "Mostrando _START_ a _END_ de _MAX_ registros",
        },
        drawCallback: function () {
            $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').addClass('dropup');
            $('.DeshabilitarUsuarioClass').bind('click',getDataUser);
        },
        preDrawCallback: function() {
            $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').removeClass('dropup');
        }
    });

    // Basic datatable
    $('.datatable-basic').DataTable();

    // External table additions
    // ------------------------------

    // Add placeholder to the datatable filter option
    $('.dataTables_filter input[type=search]').attr('placeholder','Teclee para filtrar...');

    // Enable Select2 select for the length option
    $('.dataTables_length select').select2({
        minimumResultsForSearch: Infinity,
        width: 'auto'
    });

    /////////////////////Funcionalidad vista//////////////////////////////////
    function getDataUser()
    {
        var iduser = $(this).attr('data-iduser');
        var user = $(this).closest('tr').find('td').eq(0).text();
        $("#DeshabilitarUsuarioModal #NombreUsuarioSpan").text(user);
    };

});