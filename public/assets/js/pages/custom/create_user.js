$(function () {

    $('.select').select2({
        minimumResultsForSearch: Infinity
    });

    $('.multiselect').multiselect({
        onChange: function() {
            $.uniform.update();
        },
        nonSelectedText: 'Por favor selecciona alguno de los Roles',
        includeSelectAllOption: true,
        selectAllText: 'Seleccionar Todos',
    });

    $(".styled, .multiselect-container input").uniform({ radioClass: 'choice'});
});
