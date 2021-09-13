const { parse } = require("platform");

let controller = new AbortController();
let signal = controller.signal;
let runing = false;

let tipoCambio = {
    'MXN' : 0,
    'CAD' : 0,
    'EUR' : 0
};

const inputMxn = document.querySelector('#mxn');
const inputUsd = document.querySelector('#usd');
const inputCad = document.querySelector('#cad');
const inputEur = document.querySelector('#eur');

const spanMxn = document.querySelector('#mxn-span');
const spanCad = document.querySelector('#cad-span');
const spanEur = document.querySelector('#eur-span');

function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    const charCode = (evt.which) ? evt.which : evt.keyCode;

    return !((charCode > 31 && (charCode < 48 || charCode > 57)) && charCode !== 46);
}

function multiplicacion (number1, number2){
   return numberWithCommas(parseFloat(number1 * number2).toFixed(2));
}

function updateTipoCambio(){
    const usd = inputUsd.value;

    inputMxn.value = multiplicacion(usd, tipoCambio.MXN);
    inputCad.value = multiplicacion(usd, tipoCambio.CAD);
    inputEur.value = multiplicacion(usd, tipoCambio.EUR);

    spanMxn.textContent = tipoCambio.MXN;
    spanCad.textContent = tipoCambio.CAD;
    spanEur.textContent = tipoCambio.EUR;

}

document.querySelector('#select-resort').addEventListener('change', function (event) {
    const hotelId = event.currentTarget.value;

    if(runing){
        controller.abort();
    }

    controller = new AbortController();
    signal = controller.signal;
    runing = true;

    fetch('/currency/mxn/'+hotelId, {signal})
    .then(response => {
        return response.json();
    })
    .then( tipoCambioHotel => {
        tipoCambio = tipoCambioHotel;
        updateTipoCambio();
    })
})

document.querySelector('#usd').addEventListener('keypress', function (event) {
    let value =  event.currentTarget.value;
    if(isNumber(event)){
        value = event.currentTarget.value + event.key;
    }else{
        event.preventDefault();
    }
})

document.querySelector('#usd').addEventListener('keyup', function (event) {
    updateTipoCambio();
    //inputMxn.value = numberWithCommas(parseFloat(tipoCambio * event.currentTarget.value).toFixed(2));
})


function numberWithCommas(x) {
    return x.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",");
}
