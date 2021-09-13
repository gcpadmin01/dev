require ('./interna');
require ('./components/jquery-validation');

$('#form-update-password').validate({
    rules: {
        password:{
            required: true,
            minlength: 8,
            maxlength: 15,
            strongPassword: true
        },
        passwordConfirm:{
            required: true,
            equalTo:"[name='password']",
        }
    }
});