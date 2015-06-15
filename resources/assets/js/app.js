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
}
