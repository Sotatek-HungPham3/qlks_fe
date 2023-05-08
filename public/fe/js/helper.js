function test() {
    return 1;
}

function notifySuccess(message = '') {
    $.toast({
        heading: 'Success',
        text: message,
        showHideTransition: 'slide',
        position: 'bottom-right',
        icon: 'success'
    });
}

function notifyError(message = '') {
    $.toast({
        heading: 'Error',
        text: message,
        showHideTransition: 'slide',
        position: 'bottom-right',
        icon: 'error'
    });
}


function actionWhenError(response) {
    switch (response.status) {
        case 422:
            let errors = response.responseJSON;
            notifyError(errors.message);
            break;
        case 401:
            notifyError('Auth fail.')
            localStorage.removeItem(KEY_TOKEN);
            location.href = URL_LOGIN_ADMIN;
            break;
        case 400:
            notifyError(response.responseJSON.message);
            break;
        case 500:
            notifyError('Server Error.');
            break;
    }
}

async function getData(url) {
    let data = null;
    await $.ajax({
        url: url,
        method: "GET",
        success: function (response) {
            data = response.data;
        },
        error: function (response) {
            actionWhenError(response);
        }
    });

    return data;
}
