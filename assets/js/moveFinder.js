$(document).on('click', '.move', function (e) {
    e.preventDefault();
    let move = $(this).attr('data-move');
    ajaxDirection(direction);
});

function ajaxDirection(move) {
    $.get('/finder/direction/' + move).done(function (result) {
        const alertResult = $(result).find('#messageFlash');
        $('#messageFlash').replaceWith(alertResult);
        const mapResult = $(result).find('#map');
        $('#map').replaceWith(mapResult);
    });
}

document.addEventListener('keydown', function (e) {
    let direction = null;
    switch (e.keyCode) {
        case 37:
            direction = 'W';
            break;
        case 38:
            direction = 'N';
            break;
        case 39:
            direction = 'E';
            break;
        case 40:
            direction = 'S';
            break;
        default:
            return;
    }
    ajaxDirection(direction);
});