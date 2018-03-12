errortoast = function () {
    $.toast({
        heading: 'Error',
        text: 'Duplicate email found',
        position: 'top-right',
        showHideTransition: 'fade',
        icon: 'error'
    });
}

successtoast = function () {
    $.toast({
        heading: 'Success',
        text: 'Record inserted successfully !!',
        position: 'top-right',
        showHideTransition: 'fade',
        icon: 'success'
    });
}

errortoastcat = function () {
    $.toast({
        heading: 'Error',
        text: 'Duplicate Category found',
        position: 'top-right',
        showHideTransition: 'fade',
        icon: 'error'
    });
}

successtoastcat = function () {
    $.toast({
        heading: 'Success',
        text: 'Record inserted successfully !!',
        position: 'top-right',
        showHideTransition: 'fade',
        icon: 'success'
    });
}

successtoastdelcat = function () {
    $.toast({
        heading: 'Success',
        text: 'Category Deleted successfully !!, Please reload the page...',
        position: 'top-right',
        showHideTransition: 'fade',
        icon: 'success'
    });
}
successtoastdelinfo = function () {
    $.toast({
        heading: 'Success',
        text: 'Category Deleted successfully !!, Please reload the page...',
        position: 'top-right',
        showHideTransition: 'fade',
        icon: 'success'
    });
}

warningtoast = function () {
    $.toast({
        heading: 'Warning',
        text: 'Failed to do your required operation. Please contact your administrator !!',
        position: 'top-right',
        showHideTransition: 'fade',
        icon: 'warning'
    });
}

nodatatoast = function () {
    $.toast({
        heading: 'Warning',
        text: 'Data not found!!!',
        position: 'top-right',
        showHideTransition: 'fade',
        icon: 'warning'
    });
}

loginerrortoast = function () {
    $.toast({
        heading: 'Error',
        text: 'Your Login Name or Password is invalid',
        position: 'top-right',
        showHideTransition: 'fade',
        icon: 'error'
    });
}