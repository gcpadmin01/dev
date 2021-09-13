require ('./v2/interna');
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('#supscription').submit(function(e){
	e.preventDefault();
	var formulario = $(this);
	var info = {
		name     : formulario.find("[name='name']").val(),
		email    : formulario.find("[name='email']").val(),
		country  : formulario.find("[name='country']").val(),
		optin    : formulario.find("[name='optin']").is(":checked") ? 1:0,
		lang     : formulario.find("[name='lang']").val(),
		campaing : formulario.find("[name='campaing']").val()
	}
	var passes = validateFormSupscription(info);
	var url    = info.lang == 'en' ? '/supsciption-deals/send':'/es/subscripcion-oferta/enviar';
	if(passes){
		$.ajax({
           type:'POST',
           url:HOST+url,
           data:info,
           success:function(response){
	        	$("#msg-sups").text(response.msg).removeClass('hidden').addClass(response.alert).fadeIn('fast', function() {
	        		setTimeout(function(){
	        			$("#msg-sups").text(response.msg).addClass('hidden').removeClass(response.alert);	
	        		}, 5000);
	        	});
           }
        });
	}
});


var validateFormSupscription = function(info){
	var fields = ['name','email','country','optin'];
	var passes = true;
	$('.msg-error').addClass('hidden');
	for(var name in fields){
		var field = $('#supscription').find("[name='"+fields[name]+"']");
		if(field.attr('type') == 'email'){
			if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(field.val()))){
				field.siblings('.msg-error').removeClass('hidden');
			}
		}else if(typeof field.val() == 'undefined' || field.val() == ''){
			field.siblings('.msg-error').removeClass('hidden');
			passes = false;
		}else{
			if(field.is(':checkbox')){
				if(!field.is(':checked')){
					field.closest('div').find('.msg-error').removeClass('hidden');
					passes = false;
				}
			}
		}
	}
	return passes;
}

