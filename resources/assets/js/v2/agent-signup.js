require ('./interna');

import 'jquery-validation';

jQuery.validator.addMethod("code-agent",function(v,e){
	return this.optional(e) || /^([0-9]){8}$/.test(v);
},"Format not valid");

jQuery.validator.addMethod("guest-title",function(v,e){
	return this.optional(e) || /^(Mr.|Mrs.|Miss.|Ms.|Dr.)$/.test(v);
},"Format not valid");

jQuery.validator.addMethod("alpha-space",function(v,e){
	return this.optional(e) || /^([a-zA-ZáéíóúýÁÉÍÓÚ\s])+$/.test(v);
},"Only letters and spaces.");

var optionRegister = {
	"rules":{
		"iata":{
			"required"  :true,
			"maxlength" :8,
			"code-agent":true
		},
		"guest_title":{
			"required"   :true,
			"guest-title":true
		},
		"guest_firstname":{
			"required"   :true,
			"alpha-space":true
		},
		"guest_lastname":{
			"required"   :true,
			"alpha-space":true
		},
		"postal_code":{
			"required" :true,
			"digits"   :true,
			"minlength":5,
			"maxlength":10,
		},
		"phone_number":{
			"digits"   :true,
			"minlength":7,
			"maxlength":16
		},
		"fax_number":{
			"digits"   :true,
			"minlength":7,
			"maxlength":16,
		},
		"psw":{
			"minlength":6
		},
		"psw-confirm":{
			"equalTo":"#psw"
		}
	},
	errorPlacement: function (error, element) {
		$(element).parents('.form-group').append(error);
	},
	"messages":validator.register,
	"submitHandler": function(form) {
   		form.submit();
  	}
}

console.log(validator.register);

var formRegister = $('#form-register');
var validate     = formRegister.validate(optionRegister);

//$('#state').select2({placeholder:"State"});

var countriesAutocomplete = countries.results.map( element => {
	if(element.id == ""){
		return {};
	}else{
		return {
			...element,
			label: element.text,
			value:element.text,
		};
	}
})

var country = $('#country').autocomplete({
	source: countriesAutocomplete,
	minLength: 0,
	select: function( event, ui ) {
		if(ui.item == null){
			event.target.value = "";
			event.target.closest('div').querySelector('[name="country"]').value = "";
		}else{
			event.target.closest('div').querySelector('[name="country"]').value = ui.item.id;
		}

		document.querySelector('#state').removeAttribute('disabled');
		$( "#state" ).autocomplete( "enable" );
	}
}).on('focus', function(){
	$(this).autocomplete( "search", "" );
	$(this).val("");

}).on('focusout', function(event){
	let value = event.target.closest('div').querySelector('[name="country"]').value;
	let label = "";

	if(value != ""){
		country = countriesAutocomplete.find(element => element.id == value);
		let states = country.states;
		if( states != null){
			states = states.map( element => {
				return {
					...element,
					label: element.text,
					value: element.text,
				}
			})
		}else{
			states = [];
		}
		
		$('#state').autocomplete("option", "source", states);
		$('#state').val("");
		event.target.closest('form').querySelector('[name="state"]').value = "";
		label = country.label;
	}

	event.target.value = label;
});

$('#state').autocomplete({
	minLength: 0,
	select: function( event, ui ) {
		if(ui.item == null){
			event.target.value = "";
			event.target.closest('div').querySelector('[name="state"]').value = "";
		}else{
			event.target.closest('div').querySelector('[name="state"]').value = ui.item.id;
		}
	}
}).on('focus', function(){
	$(this).autocomplete( "search", "" );
	$(this).val("");

}).on('focusout', function(event){
	let label = "";

	let country = event.target.closest('form').querySelector('[name="country"]').value;
	country = countriesAutocomplete.find(element => element.id == country);

	let value = event.target.closest('div').querySelector('[name="state"]').value;

	if(country.states != null){
		value = country.states.find( element => element.id == value);
		if( value != null){
			if(value.text != null){
				label = value.text;
			}
		}
	}

	event.target.value = label;
});