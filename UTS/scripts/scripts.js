function confirmDelete() {
    return confirm('Are you sure you want to delete this todo?');
}

function confirmSetToCompleted() {
    return confirm('Are you sure you want to completed this todo?');
}

function setCookie(name, value, days) {
    let expires = "";

    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }

    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');

    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }

    return null;
}

$(document).ready(function() {
    $('#filter-status').change(function() {
        let status = $(this).val();

        setCookie('isCompletedFilter', status, 1);

        if (status !== '') {
            status = parseInt(status);
        }

        $('.todo-status').each(function() {
            let todoStatus = $(this).data('status');

            if (status === '' || todoStatus === status) {
                $(this).closest('.card').show();
            } else {
                $(this).closest('.card').hide();
            }
        })
    });

    let savedFilter = getCookie('isCompletedFilter');
    if (savedFilter !== '') {
        $('#filter-status').val(savedFilter).change();
    }
});