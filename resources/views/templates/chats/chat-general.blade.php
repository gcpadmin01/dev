<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
     
        <title>Chat - Royal Reservations</title>
        <style>
            @import url('https://fonts.googleapis.com/css?family=Questrial');
        </style>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        
        <link href="{{asset('css-chat/chat-style.css')}}" rel="stylesheet">
       <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
       
       <script async src="https://www.googletagmanager.com/gtag/js?id=UA-115261189-1"></script>
       <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
          
            gtag('config', 'UA-115261189-1');
          </script>
    </head>
    <body>
        
            <div class="chat-container">
               <div class="header-chat-base">
                        <img src="http://www.betaroyal.oh.marketing/img/logo-royalreservations-min.png" alt="Royal Reservations Online Chat">
                </div>
          
            <form name="cicVals" action="Start.html" id="signupForm" method="get"  data-toggle="validator" role="form">
                     <div class="form-group input-box">
					     <label for="name">*Nombre:</label>
					     <input id="name" class="form-control" name="chatUsername" type="text" required="">
                    </div> 
                    <div class="form-group input-box">
                        <label for="email">*Correo Electrónico</label>
                        <input id="email" class="form-control" name="chatEmail" type="email" required="">
                    </div> 
                  
					<div class="input-box">
                    <label for="email">Número telefónico</label>
                        <input id="phone" name="chatTelephone" type="text">
                    </div> 
                
					<div class="input-box combo-box">
                        <label for="resort">*Departamento</label>
                        <div class="select-2">
                             <select size="1" name="target" >
                                <option value="0" selected="">Seleccionar área  <span class="av-yellow"><i id="down-collapseThree" class="fas fa-angle-down fa-2x"></i></span></option>
                                <option value="Chat_Customer_Service">Atención a usuarios</option>
                                <option value="Chat_MX_Destinations">Cancun / Riviera Maya</option>
                                <option value="Chat_Caribbean_Destinations" >St. Marteen / Curacao</option>
                                <option value="Chat_Grand_Residences">Grand Residences</option>
                                <option value="Chat_AlSol_Caribbean">Punta Cana</option>
                            </select>
                        </div>
                         
                    </div> 
                   
					<div class="input-box combo-box">
                        <label for="email">¿Cómo puedo ayudarle?</label>
                        <textarea name="chatDescription" rows="5" cols="60" placeholder=""></textarea>
                    </div> 
                    <div class="input-button">
                         <input id="btn-chat-now" name="btn-chat" type="submit" value="INICIAR CHAT" >
                    </div> 
                    <input type="hidden" name="language" value="Spanish">
               
                <div class="privacy-box">
                 <a href="https://royalreservations.com/es/politicas-de-los-desarrollos" target="_blank">Aviso de privacidad</a>
                </div>
                    
             </form>
            </div>
            
       
       <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script> 
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
        <script>
      
  $(function() {
    var form = document.getElementById('signupForm');




$.validator.addMethod("customemail", 
    function(value, element) {
        return /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*\w+([-.]\w+)*$/.test(value);
    }, 
    "El formato de tu correo electrónico no es correcto, por favor verifícalo."
);
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
 $.validator.addMethod("valueNotEquals", function(value, element, arg){
  return arg !== value;
 }, "Value must not equal arg.");

 // configure your validation

  $("#signupForm").validate({
    // Specify validation rules
      
    rules: {
      target: { valueNotEquals: "0" },
      chatEmail: {
        required: {
                                depends:function(){
                                    $(this).val($.trim($(this).val()));
                                    return true;
                                }   
                            },
        customemail: true
      },
      chatUsername: {
        required: true
     
          
      }
    },
    // Specify validation error messages
    messages: {
      chatUsername:"Por favor ingresa tu nombre.",
      chatEmail:{
        required:"Por favor ingresa tu correo electrónico.",
        email:"El formato de tu correo electrónico no es correcto, por favor verifícalo."
      },
      target: { valueNotEquals: "Por favor selecciona un departamento de la lista." }
     
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
        gtag('event', 'chat_now', {
            'event_label':'Chat Area Mexico En',
            'event_category':'RoyalReservations',
            'value':0,
            'event_callback': function() {
                form.submit();
            }
        });
      
    }
  });
});
        </script>
    </body>
    
</html>