function generaAnticipacion(checkin){
    var checkinDate = new Date(checkin);
    var todayDate= new Date();
    var resTimeStamp = checkinDate.getTime() - todayDate.getTime();
    var resWindow = Math.ceil(resTimeStamp/ (1000*60*60*24));
    return resWindow;
}
function getNights(checkin,checkout){
    var checkinDate = new Date(checkin);
    var checkoutDate = new Date(checkout);
    var resTimeStamp = checkoutDate.getTime() - checkinDate.getTime();
    var diff = Math.ceil(resTimeStamp/ (1000*60*60*24));
    return diff;
}


function creaDataRoomOnly(form) {
    var existe_resortId = $(form).find('[name="hotelId"]').val();
    var existe_destination = $(form).find('[name="destination"]').val();
    var rooms = $(form).find('[name="rooms"]').val();
    var adults = $(form).find('[name="adults"]').val();
    var children = $(form).find('[name="children"]').val();
    var existe_children2 = $(form).find('[name="children2"]').val();
    var startingPoint = 'Resort';
    var destination = '';
    var resortName = '';
    var resortId = '';

    if (existe_resortId) {
        var resortId = $(form).find('[name="hotelId"]').val();

        switch (resortId) {
            case '73601': resortName = 'The Royal Cancun'; destination = 'Cancun'; break;
            case '86175': resortName = 'The Royal Caribbean'; destination = 'Cancun'; break;
            case '86182': resortName = 'The Royal Islander'; destination = 'Cancun'; break;
            case '86169': resortName = 'The Royal Sands'; destination = 'Cancun'; break;
            case '86184': resortName = 'The Royal Haciendas'; destination = 'Playa del Carmen'; break;
            case '95939': resortName = 'Grand Residences'; destination = 'Riviera Maya'; break;
            case '86179': resortName = 'Simpson Bay'; destination = 'Sint Maarten'; break;
            case '86180': resortName = 'The Villas at Simpson Bay'; destination = 'Sint Maarten'; break;
            case '86181': resortName = 'The Royal Sea Aquarium'; destination = 'Curacao'; break;
            case '85285': resortName = 'Ancora'; destination = 'Punta Cana'; break;
            case '86117': resortName = 'Del Mar'; destination = 'Punta Cana'; break;
            case '106514': resortName = 'Casa de Campo'; destination = 'Punta Cana'; break;
            case '110441': resortName='Royal Uno'; destination='Cancun'; break;
            default: resortName = '';
        }
    }

    if (existe_destination) {
        var destinationLongString = $(form).find('[name="destination"]').val();
        startingPoint = 'Destination';
        if (destinationLongString.search("Cancun") >= 0) { destination = 'Cancun'; }
        if (destinationLongString.search("Morelos") >= 0) { destination = 'Riviera Maya'; }
        if (destinationLongString.search("Carmen") >= 0) { destination = 'Playa del Carmen'; }
        if (destinationLongString.search("Maarten") >= 0) { destination = 'Sint Maarten'; }
        if (destinationLongString.search("Dominican") >= 0) { destination = 'Punta Cana'; }
        if (destinationLongString.search("Curacao") >= 0) { destination = 'Curacao'; }
        if (destinationLongString == 'all') { destination = 'All Destinations'; }
    }

    if (existe_children2) { var children2 = $(form).find('[name="children2"]').val(); } else { var children2 = 0; }

    var checkin = $(form).find("input[name=datein]").val();
    var checkout = $(form).find("input[name=dateout]").val();

    var resWindow = generaAnticipacion(checkin);
    var nights = getNights(checkin,checkout);

    window.dataLayer.push({
        'event': 'Reservation',
        'reservationType': 'Hotel Only',
        'eventType': 'Quote',
        "startingPoint": startingPoint,
        "destinationName": destination,
        'resortId': resortId,
        'resortName': resortName,
        'adults': adults,
        'children': children,
        'children2': children2,
        'checkin': checkin,
        'checkout': checkout,
        'rooms': rooms,
        'resWindow': resWindow,
        'nights':nights,
    });
}

function creaDataFlightForm(formulario) {
    var resortId = $(formulario).find('[name="hotel"]').val();
    var countries = $(formulario).find('.select-airports').val()
    var airport = $(formulario).find('[name="airport"]').val()
    var rooms = $(formulario).find('[name="rooms"]').val()
    var adults = $(formulario).find('[name="adults"]').val()
    var children = $(formulario).find('[name="child"]').val()
    var checkin = $(formulario).find("input[name=aDate]").val();
    var checkout = $(formulario).find("input[name=dDate]").val();
    var resWindow = generaAnticipacion(checkin);
    var nights = getNights(checkin,checkout);

    var startingPoint = 'Resort';
    var destination = '';
    var resortName = '';

    switch (resortId) {
        case '10727': resortName = 'The Royal Cancun'; destination = 'Cancun'; break;
        case '10729': resortName = 'The Royal Caribbean'; destination = 'Cancun'; break;
        case '10730': resortName = 'The Royal Islander'; destination = 'Cancun'; break;
        case '10728': resortName = 'The Royal Sands'; destination = 'Cancun'; break;
        case '10731': resortName = 'The Royal Haciendas'; destination = 'Playa del Carmen'; break;
        case '10732': resortName = 'Grand Residences'; destination = 'Riviera Maya'; break;
        case '10733': resortName = 'Simpson Bay'; destination = 'Sint Maarten'; break;
        case '10734': resortName = 'The Villas at Simpson Bay'; destination = 'Sint Maarten'; break;
        case '10735': resortName = 'The Royal Sea Aquarium'; destination = 'Curacao'; break;
        case '110441': resortName ='Royal Uno'; destination='Cancun'; break;

        default:
            resortName = 'Not defined';
    }

    window.dataLayer.push({
        'event': 'Reservation',
        'reservationType': 'Hotel + Flight',
        'eventType': 'Quote',
        'startingPoint': startingPoint,
        'destinationName': destination,
        'resortId': resortId,
        'resortName': resortName,
        'cityOrigin': airport,
        'countryOrigin': countries,
        'adults': adults,
        'children': children,
        'checkin': checkin,
        'checkout': checkout,
        'rooms': rooms,
        'resWindow': resWindow,
        'nights':nights,
    });
}

//crea data Book Now Offers
function creaDataBookNow(form){
    var resortId = $(form).find('[name="hotelid"]').val();
    var adults = $(form).find('[name="adults"]').val();
    var children = $(form).find('[name="children"]').val();
    var existe_children2 = $(form).find('[name="children2"]');
    var resortName = "";
    if(existe_children2.length > 0){
        var children2 = existe_children2.val();
    }else{
        var children2 = 0;
    }
    var rooms = $(form).find('[name="rooms"]').val();
    var checkin = $(form).find('[name="datein"]').val();
    var checkout = $(form).find('[name="dateout"]').val();
    var resWindow = generaAnticipacion(checkin);
    var nights = getNights(checkin,checkout);

    var startingPoint='Resort';
    var destination='';

    switch(resortId){
        case '73601':resortName='The Royal Cancun';destination='Cancun'; break;
        case '86175': resortName='The Royal Caribbean'; destination='Cancun'; break;
        case '86182': resortName='The Royal Islander'; destination='Cancun'; break;
        case '86169': resortName='The Royal Sands'; destination='Cancun'; break;
        case '86184': resortName='The Royal Haciendas'; destination='Playa del Carmen'; break;
        case '95939': resortName='Grand Residences'; destination='Riviera Maya'; break;
        case '86179': resortName='Simpson Bay'; destination='Sint Maarten'; break;
        case '86180': resortName='The Villas at Simpson Bay'; destination='Sint Maarten'; break;
        case '86181': resortName='The Royal Sea Aquarium'; destination='Curacao'; break;
        case '85285': resortName='Ancora'; destination='Punta Cana'; break;
        case '86117': resortName='Del Mar'; destination='Punta Cana'; break;
        case '106514': resortName='Casa de Campo'; destination='Punta Cana'; break;
        case '110441': resortName='Royal Uno'; destination='Cancun'; break;
        default:
        resortName='Not defined';
    }

    if (typeof window.dataLayer != 'undefined' ) {
        window.dataLayer.push({
            'event':'Book now',
            'reservationType':'Hotel Only',
            'eventType': 'Quote',
            "startingPoint": startingPoint,
            "destinationName": destination,         
            'resortId':resortId,
            'resortName':resortName,
            'adults':adults,
            'children':children,
            'children2':children2,
            'checkin':checkin,
            'checkout':checkout,
            'rooms':rooms,
            'resWindow': resWindow,
            'nights':nights,
        });
    }
}

function creaDataRooms(form){
    var resortId = form.querySelector('.hotelidB').value; 
    var adults = form.querySelector('.adultsB').value;
    var children = form.querySelector('.childrenB').value;
    var existe_children2 = form.querySelector(".children2B");
    var resortName = "";
    
    if(existe_children2){
        var children2 = form.querySelector('.children2B').value
    }else{
        var children2 = 0;
    }
    
    var rooms=form.querySelector('.roomsOnly').value;
    var month = form.querySelector('[name="startmonth"]').value;

    var startingPoint='Resort';
    var destination='';
    
    switch(resortId){
        case '73601': resortName='The Royal Cancun'; destination='Cancun'; break;
        case '86175': resortName='The Royal Caribbean'; destination='Cancun'; break;
        case '86182': resortName='The Royal Islander'; destination='Cancun'; break;
        case '86169': resortName='The Royal Sands'; destination='Cancun'; break;
        case '86184': resortName='The Royal Haciendas'; destination='Playa del Carmen'; break;
        case '95939': resortName='Grand Residences'; destination='Riviera Maya'; break;
        case '86179': resortName='Simpson Bay'; destination='Sint Maarten'; break;
        case '86180': resortName='The Villas at Simpson Bay'; destination='Sint Maarten'; break;
        case '86181': resortName='The Royal Sea Aquarium'; destination='Curacao'; break;
        case '85285': resortName='Ancora'; destination='Punta Cana'; break;
        case '86117': resortName='Del Mar'; destination='Punta Cana'; break;
        case '106514': resortName='Casa de Campo'; destination='Punta Cana'; break;
        default:
        resortName='Not defined';
    }

    window.dataLayer.push({
        'event':'Book now rooms',
        'reservationType':'Hotel Only',
        'eventType': 'Quote',
        'startingPoint': startingPoint,
        'destinationName': destination,        
        'resortId':resortId,
        'resortName':resortName,
        'adults':adults,
        'children':children,
        'children2':children2,
        'checkin':month,
        'rooms':rooms,
    });
}

function clickSpecials(action, label) {
    window.dataLayer = window.dataLayer || [];

    window.dataLayer.push({
        'event':'click_specials',
        'eventModel':{
            'event_action': action,
            'event_label' : label
        }

    })
}

export {
    creaDataRoomOnly,
    creaDataFlightForm,
    creaDataBookNow,
    creaDataRooms,
    clickSpecials
}