import 'jquery-validation';

var strongPasswordMessage = "The password must contain three of the following: lower or uppercase, numerals or special characters";

if (language == "es") {
    var strongPasswordMessage = "La contraseña debe contener tres de los siguientes caracteres: minúsculas o mayúsculas, números o caracteres especiales";
    $.extend( $.validator.messages, {
        required: "Este campo es obligatorio.",
        remote: "Por favor, rellena este campo.",
        email: "Por favor, escribe una dirección de correo válida.",
        url: "Por favor, escribe una URL válida.",
        date: "Por favor, escribe una fecha válida.",
        dateISO: "Por favor, escribe una fecha (ISO) válida.",
        number: "Por favor, escribe un número válido.",
        digits: "Por favor, escribe sólo dígitos.",
        creditcard: "Por favor, escribe un número de tarjeta válido.",
        equalTo: "Por favor, escribe el mismo valor de nuevo.",
        extension: "Por favor, escribe un valor con una extensión aceptada.",
        maxlength: $.validator.format( "Por favor, no escribas más de {0} caracteres." ),
        minlength: $.validator.format( "Por favor, no escribas menos de {0} caracteres." ),
        rangelength: $.validator.format( "Por favor, escribe un valor entre {0} y {1} caracteres." ),
        range: $.validator.format( "Por favor, escribe un valor entre {0} y {1}." ),
        max: $.validator.format( "Por favor, escribe un valor menor o igual a {0}." ),
        min: $.validator.format( "Por favor, escribe un valor mayor o igual a {0}." ),
        nifES: "Por favor, escribe un NIF válido.",
        nieES: "Por favor, escribe un NIE válido.",
        cifES: "Por favor, escribe un CIF válido.",
    } );
}

$.validator.addMethod("strongPassword", function(value) {
    var regex = new RegExp("^[a-zA-Z0-9]+$");

    var strong = (regex.test(value))? 0 : 1;
    strong += (/[A-Z]/.test(value))?1:0;
    strong += (/[a-z]/.test(value))?1:0;
    strong += (/\d/.test(value))?1:0;

    if (strong >= 3) {
        return true;
    }else{
        return false;
    }

},strongPasswordMessage);