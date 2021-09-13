function dateParse(dateString) {
    var newDate = new Date();

    if(typeof dateString != 'undefined'){
        
        var date_time = dateString.split(' ');
        var split = date_time[0].split('-')
        var year = split[0];
        var month = split[1] - 1;
        var day = split[2];
        
        newDate = new Date(year, month, day)
    }
    
    return newDate;
}

function dateParse2(dateString) {
    var newDate = new Date();

    if(typeof dateString != 'undefined'){

        var date_time = dateString.split(' ');
        var split = date_time[0].split('/')
        var year = split[2];
        var month = split[0] - 1;
        var day = split[1];

        newDate = new Date(year, month, day)
    }

    return newDate;
}

export {
    dateParse,
    dateParse2
}