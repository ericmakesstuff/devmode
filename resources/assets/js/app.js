var myNotification;

$(document).ready(function() {
    $('.set-status-button').on('click', function(evt){
        evt.preventDefault();
        $.get('/set/' + $(this).data('level'));
    });
});

function setLevel(level) {
    $('.status-button').each(function() {
        if($(this).data('level') == level) {
            $(this).removeClass('disabled');
        } else {
            if(!$(this).hasClass('disabled')) {
                $(this).addClass('disabled');
            }
        }
    });
    showNotification(level);
}

function showNotification(level) {
    myNotification = new Notify('DevMode', {
        body: 'Developer Stress Level: ' + level
    });

    if (Notify.needsPermission) {
        Notify.requestPermission(function() { myNotification.show() }, function() {});
    } else {
        myNotification.show();
    }
}
