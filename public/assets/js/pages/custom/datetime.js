$(function () {
    moment.locale('es-us');

    let panel = $('.time');

    panel.block({
        message: '<i class="icon-spinner2 spinner"></i>',
        overlayCSS: {
            backgroundColor: '#fff',
            opacity: 0.8,
            cursor: 'wait',
            'box-shadow': '0 0 0 1px #ddd'
        },
        css: {
            border: 0,
            padding: 0,
            backgroundColor: 'none'
        }
    });

    window.setTimeout(function () {
       panel.unblock();
    }, 1010);

    let day = moment().format('d');
    let block;

    switch (day) {
        case '0':
            block = document.getElementById('day-0');
            break;
        case '1':
            block = document.getElementById('day-1');
            break;
        case '2':
            block = document.getElementById('day-2');
            break;
        case '3':
            block = document.getElementById('day-3');
            break;
        case '4':
            block = document.getElementById('day-4');
            break;
        case '5':
            block = document.getElementById('day-5');
            break;
        case '6':
            block = document.getElementById('day-6');
            break;
    }

    block.classList.remove('label-default');
    block.classList.add('label-danger');

    function datetime() {
        let hour = moment().format('HH');
        let minute = moment().format('mm');
        let second = moment().format('ss');

        $('#hour').text(hour);
        $('#minute').text(minute);
        $('#second').text(second);
    }

    setInterval(datetime, 1000);
});
