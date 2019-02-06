$(function () {
    $('.select').select2({
        minimumResultsForSearch: Infinity
    });

    $('.file-styled').uniform({
        fileButtonClass: 'action btn bg-teal-400'
    });

    $('.file-input').fileinput({
        browseLabel: 'Buscar',
        removeLabel: 'Quitar',
        browseIcon: '<i class="icon-file-plus"></i>',
        uploadIcon: '<i class="icon-file-upload2"></i>',
        removeIcon: '<i class="icon-cross3"></i>',
        layoutTemplates: {
            icon: '<i class="icon-file-check"></i>'
        },
        initialCaption: "No se ha seleccionado ningun archivo",
        maxFilesNum: 5,
        allowedFileExtensions: ["jpg", "gif", "png"]
    });
});
