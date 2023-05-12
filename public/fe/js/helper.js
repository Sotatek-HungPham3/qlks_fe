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

async function getSettingsPage() {
    let data = localStorage.getItem(SETTINGS_KEY);
    if (!data) {
        let url = API_URL + '/settings';
        data = await getData(url);
        localStorage.setItem(SETTINGS_KEY, JSON.stringify(data));
    }
}

function dateCompare(d1, d2) {
    const date1 = new Date(d1);
    const date2 = new Date(d2);

    if (date1 > date2) {
        return 1;
    } else if (date1 < date2) {
        return -1;
    } else {
        return 0;
    }
}

async function loadRoomTypes() {
    let url = API_URL + '/room-types';
    let data = await getData(url);

    let str = '';
    let str2 = '';
    if (data.length > 0) {
        for (const item of data) {
            let urlRoomType = DOMAIN_FE + '/room-type/' + item.slug;
            str += `<li>
                        <a href="${urlRoomType}" title="">${item.name}</a>
                     </li>`
        }
        for (const item of data) {
            let urlRoomType = DOMAIN_FE + '/images/' + item.slug;
            str2 += `<li>
                        <a href="${urlRoomType}" title="">${item.name}</a>
                     </li>`
        }
    }
    $('.navRoomTypes').html(str);
    $('.navImages').html(str2);
}

function notifyError(message = '') {
    $.toast({
        heading: 'Error',
        text: message,
        showHideTransition: 'slide',
        position: 'bottom-right',
        icon: 'error',
        hideAfter: 10000
    });
}

function subDate(date1, date2) {
    let dateAfter = new Date(date1);
    let dateBefore = new Date(date2);
    let Difference_In_Time = dateBefore.getTime() - dateAfter.getTime();

    return Difference_In_Time / (1000 * 3600 * 24);
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

async function postData(url, params) {
    let data;
    await $.ajax({
        url: url,
        method: "POST",
        data: params,
        success: function (response) {
            data = response;
        },
        error: function (response) {
            actionWhenError(response);
        }
    });

    return data;
}
