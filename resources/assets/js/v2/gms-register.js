require ('./interna');
require ('./components/jquery-validation');

var validobj = $('#form-register').validate({
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
        }
    }
});

$('#form-reset-password').validate({
    rules: {
        password:{
            required: true,
            minlength: 8,
            maxlength: 15,
            strongPassword: true
        },
        password_again: {
            equalTo: "#password"
        }
    }
});

$('#gms-countries').select2({
    data:countries.results
}).on('change', function (){
    if (!$.isEmptyObject(validobj.submitted)) {
        validobj.form();
    }
});