require ('./interna');

import 'jquery-validation';

$.ajaxSetup({
    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
});

jQuery.validator.addMethod("code-agent",function(v,e){
	return this.optional(e) || /^([0-9]){8}$/.test(v);
},"Format not valid");

jQuery.validator.addMethod("guest-title",function(v,e){
	return this.optional(e) || /^(Mr.|Mrs.|Miss.|Ms.|Dr.)$/.test(v);
},"Format not valid");

jQuery.validator.addMethod("alpha-space",function(v,e){
	return this.optional(e) || /^([a-zA-ZáéíóúýÁÉÍÓÚ\s])+$/.test(v);
},"Only letters and spaces.");

var optionLogin = {
	"rules":{
		"iata":{
			"required"  :true,
			"maxlength" :8,
			"code-agent":true
		}
	},
	"messages":validator.verify,
	"submitHandler": function(form) {
   		form.submit();
  	}
}

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
	"messages":validator.register,
	"submitHandler": function(form) {
   		form.submit();
  	}
}

var formLogin = $('#form-login');
	formLogin.validate(optionLogin);
var formRegister = $('#form-register');
	formRegister.validate(optionRegister);

$("#verify-button").click(function(e) {
	var iata = $('[name="iata"]').val();
	if(formVerify.valid()){
		verifyIata(iata);
	}
});

$("#register-button").click(function(e) {
	e.preventDefault();
	var data = $(this).closest('#register').find('input,select');
	data = data.serializeArray();
	var send = {};
	for(var row of data){
		send[row.name] = row.value;
	}
	if(formRegister.valid()){
		registerAgent(send);
	}
});

$(".recover-password").click(function(e){
	$("#login-form").addClass('hidden');
	$("#reset").removeClass('hidden');
});

$(".back-form").click(function(e){
	e.preventDefault();
	var container = $(this).closest('div');
	container.addClass('hidden').fadeOut('fast',function(){
		$("#verify").removeClass('hidden').fadeIn('fast');
	});
});

function verifyIata(iata){
	$.ajax({
		url: HOST+'/agents-royal-resorts/verify-iata/'+iata,
		type: 'GET',
		dataType:'json'
	})
	.done(function(verify) {
		$("#verify").addClass('hidden');
		if(verify.exist==true)
			showLogin(iata);
		else
			showRegister(iata);
	});
}