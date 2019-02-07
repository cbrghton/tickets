$(function () {

    $('.select').select2({
        minimumResultsForSearch: Infinity
    });

    $('.listbox').bootstrapDualListbox({
        showFilterInputs: false,
        infoText: 'Mostrando {0}',
        infoTextEmpty: 'Vacio',
    });



});
