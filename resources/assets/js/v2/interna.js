require('intersection-observer');
import LazyLoad from './components/lazyload';
import 'bootstrap/js/dist/util';
import 'bootstrap/js/dist/dropdown';
import 'bootstrap/js/dist/modal';
import 'bootstrap/js/dist/collapse';
import 'bootstrap/js/dist/tab';

import 'jquery-ui/ui/widgets/datepicker.js';
import 'jquery-ui/ui/widgets/autocomplete.js';
import 'bootstrap-datepicker';

require('./components/modals');
require ('./components/jquery-validation');

var images = document.querySelectorAll(".lazyload");

new LazyLoad(images,{
    rootMargin : '200px'
});


//=================================================================================
// Funcion para guardar una cookie
//=================================================================================
function setCookie(cname, cvalue, exdays, minutes) {
    var d = new Date();
    var days = (exdays*24*60*60*1000);
    var minutes = (minutes*60*1000);
    d.setTime(d.getTime() + days + minutes);
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

//=================================================================================
// Funcion para recuperar una cookie por default retorno una cadena vacia
//=================================================================================
function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');

    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}




//===================================================================
// Se define el idioma para los plugins de fechas
//===================================================================
if (!$.fn.bootstrapDP && $.fn.datepicker && $.fn.datepicker.noConflict) {
    var datepicker = $.fn.datepicker.noConflict();
    $.fn.bootstrapDP = datepicker;
}

if(language == 'es'){
    $.datepicker.regional['es'] = {
        closeText: 'Cerrar',
        prevText: '< Ant',
        nextText: 'Sig >',
        currentText: 'Hoy',
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Juv', 'Vie', 'Sáb'],
        dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
        weekHeader: 'Sm',
        dateFormat: 'dd/mm/yy',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''
    };
    $.datepicker.setDefaults($.datepicker.regional['es']);

    $.fn.bootstrapDP.dates['es'] = {
        days: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        daysShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Juv', 'Vie', 'Sáb'],
        daysMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
        months: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthsShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
        today: 'Hoy',
        clear: "Clear",
        format: 'dd/mm/yy',
        titleFormat: "MM yyyy",
        weekStart: 0
    };

    $.fn.bootstrapDP.defaults.language = 'es';
}

//===================================================================
// Evento para el modal de solicitud de login del GMS 
//===================================================================
if (gmsIsGuest == 1 && ( namePage == "" || namePage == 'deals' || namePage == 'sub-inter-special' ) && getCookie('modal_gms') == "" ) {
    setTimeout(function(){ 
        $('#modal-gms').modal('show');
        setCookie('modal_gms','true',1,0);
    }, 3000);
}

//===================================================================
// Eventos del booking header
//===================================================================
require ('./_booking-header');


//========================================================================
// Evento para el cintillo que se muestra en el header
//========================================================================
if (window.NodeList && !NodeList.prototype.forEach) {
    NodeList.prototype.forEach = function (callback, thisArg) {
        thisArg = thisArg || window;
        for (var i = 0; i < this.length; i++) {
            callback.call(thisArg, this[i], i, this);
        }
    };
}


document.querySelectorAll('.resort-month .close').forEach( item => {
    item.addEventListener('click', event => {
        try{
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event' :'track_event',
                'eventModel' : {
                    'event_category':'THBanner',
                    'event_action':'close',
                    'event_label':'covid-19'
                }
            })
        }catch(err){
            console.log(err)
        }
        document.querySelectorAll('.resort-month').forEach( alert => {
            alert.style.display = 'none';
        })
    })
});

document.querySelectorAll('.resort-month a').forEach( item => {
    item.addEventListener('click', event => {
        try{
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event':'track_event',
                'eventModel': {
                    'event_category':'THBanner',
                    'event_action':'click',
                    'event_label':'covid-19'
                }
            })
        }catch(err){
            console.log(err)
        }
    })
});

//===================================================================
// Eventos de manage your reservation
//===================================================================
$('.manageMyReservation').click(function (e) {
    e.preventDefault();
    var resort = $(this).closest('form').find('[name="hotelid"]').val();
    var confirmation = $(this).closest('form').find('[name="confirmId"]').val();
    if (resort != '0' && confirmation !='') {

        var formulario = $(this).closest('form');
        var resortId =  $(formulario).find('[name="hotelid"]').val();
        var resortName = "";
        switch(resortId){
            case '73601': resortName='The Royal Cancun';break;
            case '86175': resortName='The Royal Caribbean'; break;
            case '86182': resortName='The Royal Islander'; break;
            case '86169': resortName='The Royal Sands'; break;
            case '86184': resortName='The Royal Haciendas'; break;
            case '95939': resortName='Grand Residences'; break;
            case '86179': resortName='Simpson Bay'; break;
            case '86180': resortName='The Villas at Simpson Bay'; break;
            case '86181': resortName='The Royal Sea Aquarium'; break;
            case '85285': resortName='Ancora'; break;
            case '86117': resortName='Del Mar'; break;
            case '106514': resortName='Casa de Campo'; break;
            default:
            resortName='Not defined';
        }

            window.dataLayer.push({
                'event':'ManageReservation',
                'resortId':resortId,
                'resortName':resortName,
            });
        $(this).closest('form').submit();
        return true;
    } else {
        $('#error').show();
        return false;
    }
});

//===================================================================
// Eventos del menu mobil del header
//===================================================================

 $('#resort-mobil-img').on('show.bs.collapse', function (element) {
    $('#nav-call').collapse('hide');
    $('#nav-movil').collapse('hide');
    $('#my-royal-mobil').collapse('hide');    
});

$('#nav-call').on('show.bs.collapse', function (element) {
    $('#resort-mobil-img').collapse('hide');
    $('#nav-movil').collapse('hide');
    $('#my-royal-mobil').collapse('hide');    
});

$('#nav-movil').on('show.bs.collapse', function (element) {
    $('#resort-mobil-img').collapse('hide');
    $('#nav-call').collapse('hide');
    $('#my-royal-mobil').collapse('hide');    
});

$('#my-royal-mobil').on('show.bs.collapse', function (element) {
    $('#resort-mobil-img').collapse('hide');
    $('#nav-call').collapse('hide');
    $('#nav-movil').collapse('hide');    
});

//===================================================================
// Eventos del header
//===================================================================
var header = $('.nav-primary'); // Div contenedor del header principal
var navPrimary = $('.pading-header'); // Div contenedor para menu de secciones sin banner

//===================================================================
// Agrega un padding para las secciones que no tienen banner principal
//===================================================================
function setPaddings() {
    if (header.css('position') != 'relative') {
        navPrimary.css('padding-top', header.height() + 15);
    } else {
        navPrimary.css('padding-top', 0);
    }
}

//===================================================================
// Funcion para que header principal se mantenga siempre visible 
// en el navegado
//===================================================================
function checkScroll() {
    var navBlue = $('.nav-blue').height();
    var dif = navBlue - window.scrollY;
    if (dif >= -2) {
        $('.nav-primary').removeClass('scroll');
        $('.callus').addClass('hidden');
    } else {
        $('.nav-primary').addClass('scroll');
        $('.callus').removeClass('hidden');
    }
}

//===================================================================
// Funcion que verifica si se encuentra visible un formulario de 
// reservas dentra la sección
//===================================================================
function elementVisible(element) {
    var visible = true;
    var windowTop = $(document).scrollTop();
    var windowBottom = windowTop + window.innerHeight;
    var elementPositionTop = element.offset().top;
    var elementPositionBottom = elementPositionTop + element.height();

    if (elementPositionTop >= windowBottom || elementPositionBottom <= windowTop) {
        visible = false;
        $('.boton-booking-now-fixed').show();
    } else {
        $('.boton-booking-now-fixed').hide();
    }

    return visible;
}

//$(window).resize(function () {
//    setPaddings();
//});
//
//$(window).scroll(function () {
//    checkScroll();
//    setPaddings();
//    elementVisible($('.booking-interno-container'));
//});
//
//checkScroll();
//setPaddings();
//elementVisible($('.booking-interno-container'));

//========================================================================
// Se agrega lazy load para el feed de instagram
//========================================================================
var instagramFeed = document.querySelector('*[class^="elfsight-app"]');
if (instagramFeed !==  null ){
    if (!IntersectionObserver) {
        var scriptInstagrama = document.createElement('script');
        scriptInstagrama.setAttribute('src','https://apps.elfsight.com/p/platform.js');
        document.querySelector('body').append(scriptInstagrama);
    }else{
        var observerConfig = {
            root: null,
            rootMargin: "250px",
            threshold: [0]
        };
        
        var observer = new IntersectionObserver(function (entries, observer) {
            Array.prototype.forEach.call(entries, function (entry) {
                if (entry.isIntersecting) {
                    observer.unobserve(entry.target);
                    
                    var scriptInstagrama = document.createElement('script');
                    scriptInstagrama.setAttribute('src','https://apps.elfsight.com/p/platform.js');
                    document.querySelector('body').append(scriptInstagrama);

                }
            });
        }, observerConfig);
    
        observer.observe(instagramFeed);
    }
}
$('.select-hotel-destino').trigger('change');

//=================================================================================
// Funcion para remover el css Critico
//=================================================================================
document.onreadystatechange = function () {
    if (document.readyState == "complete") {
        setTimeout(function(){
            var element = document.getElementById('ccss');
            if(element != null)
                element.remove();
        },200)
    }
}


//=================================================================================
// Se agrega eventos del datalayer
//=================================================================================
document.querySelectorAll('[data-layer_toggle="click"]').forEach( item => {
    item.addEventListener('click', event => {
        const layerCategory = event.currentTarget.dataset.layer_category;
        const layerAction = event.currentTarget.dataset.layer_action;
        const layerLabel = event.currentTarget.dataset.layer_label;

        try{
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event':'track_event',
                'eventModel': {
                    'event_category':layerCategory,
                    'event_action':layerAction,
                    'event_label':layerLabel
                }
            })
        }catch(err){}
    });
})

$('#gms-countries-modal').select2({
    data:countries.results,
    placeholder: "Country"
}).on("select2:close", function (e) {
    $(this).valid();
});


const formGmsEmail = document.querySelector('.form-modal-gms');

if (formGmsEmail != null){
    $('.form-modal-gms').validate({
        rules: {
            ignore: [],
            password:{
                required: true,
                minlength: 8,
                maxlength: 15,
                strongPassword: true
            },
            country:{
                required: true,
                //minlength:2
            },
        },
        errorPlacement: function (error, element) {
            error.appendTo(element.closest('div').find('.error'));
        },
    });
}

//=================================================================================
// Se anexa campo a los forms booking TC campo children
//=================================================================================

var childrenInput = document.querySelectorAll("form [name='children']");


childrenInput.forEach(function (elm){
    elm.addEventListener("click",function (evt){
       var content   = evt.target.closest(".booking-interno-inputs");
       var form      = evt.target.closest('form');
       var hotelID   = form.querySelector('[name="hotelId"]') != null ? form.querySelector('[name="hotelId"]'):form.querySelector('[name="hotelid"]');
       var except    = ['86181','86180','86179'];

       hotelID = (hotelID == null ? null:hotelID.value);

       if(hotelID !== null && except.indexOf(hotelID) === -1){
           if(evt.target.value > 0 && content.querySelectorAll(".ages .age").length > 0){
               content.querySelector('.ages').classList.remove('d-none');
           }
       }
    });

    elm.addEventListener("change",function(event){
        var rangeAges = event.target.closest('.booking-interno-inputs');
        var content   = rangeAges.querySelector(".ages");
        var form    = event.target.closest('form');
        var hotelID = form.querySelector('[name="hotelId"]') != null ? form.querySelector('[name="hotelId"]'):form.querySelector('[name="hotelid"]');
        var except = ['86181','86180','86179'];
        var selectCount = content.querySelectorAll(".age");
        var temp = '';
        var opct = '';

        hotelID = (hotelID == null ? null:hotelID.value);

        if(hotelID !== null && except.indexOf(hotelID) === -1){
            if (event.target.value > 0){
                content.classList.remove('d-none');
                rangeAges = (rangeAges.querySelector(".spChildren").innerText.match(/[\d]+/g))[1];

                for(var j = 0;j < rangeAges;j++){opct += '<option value="'+(j+1)+'" class="label-age">'+(j+1)+'</option>';}

                if(selectCount.length == 0){
                    for(var i = 0;i < event.target.value;i++){
                        temp += templateSelect(i,opct);
                    }
                    content.innerHTML  = '';
                    content.innerHTML = temp;
                } else if(selectCount.length < event.target.value) {
                    for(var i = selectCount.length;i < event.target.value;i++){
                        temp += templateSelect(i,opct);
                    }
                    content.innerHTML += temp;
                }else if(selectCount.length > event.target.value){
                    var selectDel;
                    for (var i = 0 ; i < (selectCount.length - event.target.value );i++){
                        selectDel = selectCount[((selectCount.length -1)-i)];
                        selectDel.remove();
                    }

                }
            }else{
                content.classList.add('d-none');
                content.innerHTML = '';
            }
        }
    });
})

let templateSelect = function(index,optionAges){
    var label = language == 'en' ? 'Children':'Niño';

    var selectBase = `
        <div class="age">
            <label>${label} ${index+1}</label>
            <div class="select">
                <select class="form-control"
                >
                    <option selected value="0">0</option>
                    ${optionAges}
                </select>
            </div>
        </div>
`   ;
    return selectBase;
}

window.addEventListener("click",function(evt){
    var exceptions = [
        document.querySelector("[name='children']")
    ];

    if(exceptions.indexOf(evt.target) !== -1 || evt.target.classList.contains('form-control') || evt.target.classList.contains('ages') ||evt.target.classList.contains('age') || evt.target.classList.contains('label-age') || evt.target.classList.contains('select')){
        return;
    }else{
        var agesSelect = document.querySelectorAll(".ages")
        agesSelect.forEach((elm) => {if(!elm.classList.contains('d-none')){elm.classList.add("d-none")}})
    }
});