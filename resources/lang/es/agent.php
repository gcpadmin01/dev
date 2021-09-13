<?php

return [
	"title_main"     => "Portal de Agentes de viajes",
	"title_welcome"  => "¡Bienvenido!",
	"title_code"     => "Código de acreditación<br>(TRUE CODE/IATA/ARC/TIDS)",
	"title_help"     => 'Agentes de Viaje, Ayuda | Royal Reservations',
	"title_login"    => 'Agentes de Viaje, Inicio | Royal Reservations',
	"title_reset_password" => 'Agentes de Viaje, Contraseña | Royal Reservations',
	"title_signup"   => 'Registro de Nuevo Agente de Viajes ',
	'title_customer_choice' => '',

	"h1_login" => 'Bienvenidos Agentes de Viaje',
	"h1_register" => 'Registro de Nuevo Agente',
	"h1_reset_password" => 'Reestablecer Contraseña',

	"record_agent"   => "Nuevo agente",
	"btn_next"       => "Continuar",
	"btn_save"       => "Guardar",
	"btn-back"       => "Back to login",
	"btn-deals"      => "Back to deals",
	"link-info"      => "For more information click here.",
	"btn_login"      => "Entrar",
	"btn_send_reset" => "Enviar",
	"login_fail"     => "Tu contraseña no es correcta",
	"resort_text"    => "¡GANA UNA COMISIÓN DEL 15% POR LAS SIGUIENTES OFERTAS EXCLUSIVAS PARA AGENTES DE VIAJES!",
	"title_reset"    => "Reiniciar Contraseña",
	"title_forgot"   => "¿Olvidó su contraseña?",

    "title_faqs"     => "Preguntas Frecuentes",

	"url"            => [
		"main" => "agentes-royal-resorts",
		"help" => "ayuda"
	],
	"content"       => '
		<p>Royal Reservations presenta su portal de Agentes de viajes, donde podrás obtener ofertas especiales para tus clientes. Disfruta de nuestros principales destinos caribeños: Cancún, Riviera Maya, St. Maarten, Curazao o República Dominicana, los cuales cuentan con las más hermosas playas de arena blanca y aguas turquesas.</p>
        <p>Obtén una comisión del 15% sobre cada venta (Comisiones calculadas sobre la tarifa antes de impuestos)</p>
        <p>¿Cómo formar parte de nuestra lista de ofertas especiales para Agentes de Viajes? Todo lo que tienes que hacer es completar el siguiente formulario.</p>
        <p>Si ya estás registrado, todo lo que tienes que hacer es iniciar sesión.</p>
    ',
	"banner_login"        => asset("img/agent/banners/banner-agents-es.jpg"),
	"banner_home"         => asset("img/agent/banners/banner-agents-home-es.jpg"),
	"banner_login_mobile" => asset("img/agent/banners/mobile/banner-agent-es.jpg"),
	"banner_home_mobile"  => asset("img/agent/banners/mobile/banner-agent-home-es.jpg"),
	"info" => asset("img/agent/travelagents-gif-es.gif"),
	"gretting"            => "Hola ",
	"login"               => "Inicia sesión",
	"logout"              => "Salir",
	"fields"        => [
		"register"  => [
			"guest_firstname" => "Nombre del agente",
			"guest_lastname"  => "Apellido del agente",
			"agency_name"     => "Nombre de la agencia",
			"address1"        => "Dirección 1",
			"address2"        => "Dirección 2",
			"city"            => "Ciudad",
			"state"           => "Estado/Provincia",
			"postal_code"     => "Código postal",
			"country"         => "País",
			"phone_number"    => "Número de teléfono",
			"fax_number"      => "Número de fax",
			"email"           => "Dirección de correo electrónico",
			"psw"             => "Contraseña",
			"psw-confirm"     => "Confirmar contraseña"
		],
		"reset" => [
			"email"       => "Email",
			"psw"         => "Contraseña",
			"psw-confirm" => "Confirma contraseña"
		]
    ],
    "validator" => [
    	"verify" => [
    		"iata" => [
				"required" => "Código de certificación obligatorio.",
				"code-agent" => "Codigo de certificación no es valido.",
				"maxlength" => "Mínimo 8 dígitos."
			]
    	],
    	"register" => [
    		"iata" => [
				"required" => "Código de certificación obligatorio.",
				"code-agent" => "Codigo de certificación no es valido.",
				"maxlength" => "Mínimo 8 dígitos."
			],
			"guest_title"     => [
			"required"        => "Titulo es obligatorio.",
				"guest-title" => "Titulo del agente no valido."
			],
			"guest_firstname" => [
				"required"    => "Nombre es obligatorio.",
				"alpha-space" => "Solo letras y espacios."
			],
			"guest_lastname"  => [
				"required"    => "Apellido es obligatorio.",
				"alpha-space" => "Solo letras y espacios."
			],
			"agency_name"     => [
				"required"    => "La agencia es obligatoria.",
			],
			"address1"        => [
				"required"    => "Direccion 1 es obligatoria.",
			],
			"address2"        => [
				"required"    => "Direccion 2 es obligatoria.",
			],
			"city"            => [
				"required"    => "Ciudad es obligatoria.",
			],
			"state_msg"           => [
				"required"    => "Estado es obligatorio",
			],
			"postal_code"     => [
				"required"    => "Código postal.",
				"minlength"   => "Mínimo 5 dígitos.",
				"maxlength"   => "Máximo 10 dígitos.",
				"digits"      => "Solo dígitos."
			],
			"country_msg"         => [
				"required"    => "País es obligatorio.",
			],
			"phone_number"    => [
				"required"    => "Teléfono es obligatorio.",
				"minlength"   => "Mínimo 7 dígitos.",
				"maxlength"   => "Máximo 16 dígitos.",
				"digits"      => "Solo dígitos."
			],
			"fax_number"      => [
				"minlength"   => "Mínimo 7 dígitos.",
				"maxlength"   => "Máximo 16 dígitos.",
				"digits"      => "Solo dígitos."
			],
			"email"           => [
				"required"    => "E-mail es obligatorio.",
				"email"       => "Por favor introduce un email valido."
			],
			"psw"             => [
				"required"    => "Contraseña es obligatorio.",
				"minlength"   => "Mínimo 6 caracteres.",
			],
			"psw-confirm"     => [
				"equalTo"     => "Contraseña no coincide."
			],
		]
    ],
    "messages" => [
    	'registered'  => 'Tus datos se han guardado correctamente.',
    ],
    "email" => [
		"register" => [
			"main"   => 'Estimado',
			"p1"     => 'Royal Reservations presenta su portal de Agentes de viajes, donde podrás obtener ofertas especiales para tus clientes. Disfruta de nuestros principales destinos caribeños: Cancún, Riviera Maya, St. Maarten, Curazao o República Dominicana, los cuales cuentan con las más hermosas playas de arena blanca y aguas turquesas.',
			"p2"     => '¡Las comisiones por cualquiera de las ventas son del 15% del monto total de la reserva!',
			"p3"     => '¿Cómo formar parte de nuestra lista de ofertas especiales para Agentes de Viajes? Todo lo que tiene que hacer es iniciar sesión en el siguiente enlace:',
			"social" => '¡SÍGUENOS EN REDES SOCIALES! : ',
			"agency_name"  => "NOMBRE DE LA AGENCIA:",
			"code"         => "TIPO DE ACREDITACIÓN",
			"iata"         => "CÓDIGO DE ACREDITACIÓN:",
			"address1"     => "DIRECCIÓN 1:",
			"address2"     => "DIRECCIÓN 2:",
			"city"         => "CIUDAD:",
			"state"        => "ESTADO:",
			"postal_code"  => "CÓDIGO POSTAL:",
			"country"      => "PAÍS:",
			"phone_number" => "TELÉFONO:",
			"fax_number"   => "FAX:",
			"email"        => "CORREO ELECTRÓNICO:",
		],
		"reset" => [
			"main"         => "¡Hola!",
			"p1"           => "Recibiste este correo electrónico porque recibimos una solicitud de restablecimiento de contraseña para tu cuenta.",
			"p2"           => 'Si tienes problemas para hacer clic en el botón "Restablecer contraseña", copia y pega la siguiente URL en tu navegador web:',
			"btn"          => "Reiniciar Contraseña",
		]
		],
	'faqs' => [
		[
			'question' => '¿Qué es el Portal de viajes de Royal Reservations?',
			'answer'   => 'La familia Royal Resorts se enorgullece en presentar su nuevo Portal de agentesde viajes de Royal Reservations donde puedes disfrutar de todas las ofertas de canales directos con beneficios especiales que usualmente  no son públicas para agentes de viajes. Estas ofertas no están disponibles en ningún GDS ni en alguna otra plataforma. ¡Además, recibirás una atractiva comisión del 15% por cada venta aplicable a todas sus ofertas!'
		],
		[
			'question' => '¿Cómo me registro?',
			'answer'   => 'En la página de inicio del Portal de agentes de viajes de Royal Reservations escribe tu TRUECODE, IATA, ARC, TIDS en el cuadro de validación, presiona el botón SIGUIENTE y completa el formulario con los campos obligatorios. Después haz clic en el botón GUARDAR. Recibirás un  correo electrónico de confirmación cuando el proceso haya terminado.'
		],
		[
			'question' => '¿Cómo inicio sesión?',
			'answer'   => 'En la página de inicio del Portal de Agentes de Viajes de Royal Reservations escribe tu TRUECODE, IATA, ARC, TIDS en el cuadro de validación y presiona el botón SIGUIENTE. Aparecerá un cuadro donde puedes escribir tu contraseña para iniciar sesión.'
		],
		[
			'question' => '¿Cómo recupero mi contraseña?',
			'answer'   => 'En la página de inicio del Portal de Agentes de Viajes de Royal Reservations escribe tu TRUECODE, IATA, ARC, TIDS en el cuadro de validación y presiona el botón SIGUIENTE. Aparecerá un cuadro donde puedes escribir su contraseña para iniciar sesión y la opción ¿Olvidó su contraseña? aparecerá. Haga clic en la opción ¿Olvidó su contraseña? y siga los pasos para recuperarla. Recibirá un correo electrónico de Restablecer contraseña en su bandeja de entrada, haga clic en el enlace Restablecer contraseña y siga los últimos pasos para completar el proceso.'
		],
		[
			'question' => '¿Cuánto es el porcentaje de comisión que obtengo?',
			'answer'   => 'Todos los Agentes de Viajes registrados reciben una comisión del 15% así como promociones y descuentos exclusivos que no están disponibles en otros canales ni plataformas GDS. (Comisiones calculadas sobre tarifas antes de impuestos.)'
		],
		[
			'question' => '¿Cuántos agentes de viajes por agencia de viajes pueden registrarse?',
			'answer'   => 'Solo puedes registrar un correo electrónico por código (TRUECODE, IATA, ARC, TIDS). Te recomendamos que te comuniques con su jefe inmediato, gerente o agencia anfitriona para que puedan determinar qué correo electrónico único se registrará con su código. De esta forma, muchas agencias de viajes pueden compartir un solo correo electrónico para iniciar sesión y reservar.'
		],
		[
			'question' => '¿Cómo obtengo el pago de mi comisión?',
			'answer'   => 'Una vez que su cliente haya realizado checkout en nuestros resorts, verificamos la información de reserva de los agentes de viajes registrados en la Plataforma Travelclick y en la Plataforma Onyx Center Source para conocer las reservas comisionables por agente registrado cada mes. Cuando finaliza el análisis y la validación de datos, comienza el proceso de pago.'
		],
		[
			'question' => '¿Qué es Onyx Centersource?',
			'answer'   => 'Onyx CenterSource es un proveedor global líder de pagos B2B y soluciones de inteligencia empresarial para la industria hotelera. La compañía se esfuerza por construir relaciones duraderas con sus socios y le apasiona brindar un servicio al cliente de calidad, una visión consultiva y soluciones rentables. Con un legado que data de 1992, la compañía facilita más de $ 2,1 mil millones en pagos anuales, asociándose con más de 150,000 propiedades hoteleras y 200,000 proveedores de reservas de viajes en 160 países. Para obtener más información, visite <a href="https://www.onyxcentersource.com" target="_blank" rel="noopener noreferrer">www.onyxcentersource.com</a>'
		],
		[
			'question' => '¿Cuándo recibo el pago de mi comisión?',
			'answer'   => 'Depende de los siguientes factores principalmente: Fecha en la que tu cliente haga checkout en nuestros resorts. Que los datos como agente de viajes / agencia de viajes / agencia anfitriona sean válidos. Recuerda que debes utilizar nuestro Portal de agente de viajes de Royal Reservations para reservar y obtener nuestras comisiones y ofertas exclusivas.'
		],
		[
			'question' => '¿Cómo puedo verificar si mi agencia de viajes / agencia anfitriona está registrada?',
			'answer'   => 'En la página de inicio del Portal de Agentes de Viajes de Royal Reservations, simplemente escribe tu TRUECODE, IATA, ARC, TIDS en el cuadro de validación, presiona el botón SIGUIENTE. Si nuestra plataforma solicita una contraseña, ese código ya está registrado. También puedes contactarnos vía correo electrónico a la dirección <a href="mailto:ask4help@royalresorts.com">ask4help@royalresorts.com</a> y con gusto revisaremos nuestra base de datos para validar que el código ya está registrado.'
		],
		[
			'question' => '¿Puedo cambiar mi información personal / agencia / agencia anfitriona?',
			'answer'   => 'Puedes cambiar tu contraseña a través de nuestro Portal de Agentes de Viajes y también puedes llamarnos o enviarnos un correo electrónico solicitando cambiar tu correo electrónico también. Para cambiar el resto de tu información (dirección, código postal, etc.) puedes llamarnos o enviarnos un correo electrónico y nos pondremos en contacto con el equipo de Travelclick para que nos apoye en cumplir con tu solicitud. Este último proceso lleva hasta 72 horas. Te avisaremos cuando el proceso se haya completado.'
		],
		[
			'question' => '¿A qué número de teléfono de contacto o correo electrónico puedo contactarlos?',
			'answer'   => '"Puedes llamarnos desde EE. UU. Utilizando nuestro número de servicio al cliente <a href="tel:18887214420" >1-888-721-4420</a> y desde el resto del mundo: <a href="tel:529988488226">(+52) 998-848-8226</a>. También puedes enviarnos un correo electrónico a <a href="mailto:ask4help@royalresorts.com" target="_blank">ask4help@royalresorts.com</a>. Si necesita asistencia con la plataforma Onyx, puede visitar el siguiente enlace: <a href="https://www.onyxcentersource.com/need-assistance/" target="_blank" rel="noopener noreferrer">www.onyxcentersource.com/need-assistance</a>"'
		]
	]
];