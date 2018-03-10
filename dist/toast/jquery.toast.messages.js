errortoast = function(){
        $.toast({
            heading: 'Error',
            text: 'Duplication email foun',
            position: 'top-right',
            showHideTransition: 'fade',
            icon: 'error'
        });
    }

    successtoast = function(){
        $.toast({
            heading: 'Success',
            text: 'Record inserted successfully !!',
            position: 'top-right',
            showHideTransition: 'fade',
            icon: 'success'
        });
    }

    warningtoast = function(){
        $.toast({
            heading: 'Warning',
            text: 'Failed to store to database. Contact your administrator !!',
            position: 'top-right',
            showHideTransition: 'fade',
            icon: 'warning'
        });
    }