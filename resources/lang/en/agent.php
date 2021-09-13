<?php

return [
	"title_main"     => "Travel Agents portal",
	"title_welcome"  => "Welcome",
	"title_code"     => "Acreditation code<br>(TRUE CODE/IATA/ARC/TIDS)",
	"title_help"     => 'Travel Agents, FAQs | Royal Reservations',
	"title_login"    => 'Travel Agents, Login | Royal Reservations',
	"title_reset_password" => 'Travel Agents, Reset Password | Royal Reservations',
	"title_signup"   => 'New Travel Agent Registration',
	'title_customer_choice' => 'Cookies Policy | Royal Reservations',

	"h1_login" => 'Welcome, Travel Agents',
	"h1_register" => 'New agency registration',
	"h1_reset_password" => 'Reset your password',

	"record_agent"   => "New Agent",
	"btn_login"      => "Log in",
	"btn_save"       => "Save",
	"btn-back"       => "Back to login",
	"btn-deals"      => "Back to deals",
	"link-info"      => "For more information click here.",
	"help"           => "Help",
	"btn_send_reset" => "Send",
	"login_fail"     => "Your accreditation code or password is incorrect",
	"resort_text"    => "Earn a 15% commission for the following exclusive Travel Agent deals!",
	"title_reset"    => "Reset Password",
	"title_forgot"   => "Forgot your password? ",
    "title_faqs"     => "Travel Agent Portal FAQ",
	
	
	"url"            => [
		"main" => "agents-royal-resorts",
		"help" => "help",
	],
	"content"        => '
		<p>Royal Reservations presents our Travel Agents portal, where you could get special deals for your customers for them to travel to our top Caribbean destinations: Cancun, Riviera Maya, St. Maarten Island, Curacao Island or the Dominican Republic with the best white sand beaches and its turquoise waters. </p>
        <p>You will get a 15% commission on each sale (commissions will be calculated on the rate before taxes)</p>
        <p>How could you become part of our Travel Agents special deals list? You only need to fill up the following form.</p>
		<p>If you are already registered, you just need to login. </p>
    ',
	"banner_login"  => asset("img/agent/banners/banner-agents-en.jpg"),
	"banner_home"   => asset("img/agent/banners/banner-agents-home-en.jpg"),
	"banner_login_mobile" => asset("img/agent/banners/mobile/banner-agent-en.jpg"),
	"banner_home_mobile" => asset("img/agent/banners/mobile/banner-agent-home-en.jpg"),
	"info" => asset("img/agent/travelagents-gif-en.gif"),
	"gretting"      => "Hello ",
	"login"         => "Log in",
	"logout"        => "Log out",
	"fields"        => [
		"register" => [
			"guest_firstname" => "Agent First Name",
			"guest_lastname"  => "Agent Last Name",
			"agency_name"     => "Agency Name",
			"address1"        => "Address 1",
			"address2"        => "Address 2",
			"city"            => "City",
			"state"           => "State/Province",
			"postal_code"     => "Postal Code",
			"country"         => "Country",
			"phone_number"    => "Phone Number",
			"fax_number"      => "Fax Number",
			"email"           => "Email Address",
			"psw"             => "Password",
			"psw-confirm"     => "Password Confirm"
		],
		"reset" => [
			"email"       => "Email",
			"psw"         => "Password",
			"psw-confirm" => "Password Confirm"
		]
    ],
    "validator" => [
    	"verify" => [
    		"iata" => [
				"required"   => "Code certification is required",
				"code-agent" => "Code certification is not valid",
				"maxlength"  => "Maximun 8 digits."
			]
    	],
    	"register" => [
    		"iata" => [
				"required"   => "Code certification is required",
				"code-agent" => "Code certification is not valid",
				"maxlength"  => "Maximun 8 digits."
			],
			"guest_title"     => [
			"required"        => "Code title is required",
				"guest-title" => "Guest title is not valid."
			],
			"guest_firstname" => [
				"required"    => "The firstname is required.",
				"alpha-space" => "Only letters and spaces."
			],
			"guest_lastname"  => [
				"required" => "The lastname is required.",
				"alpha-space" => "Only letters and spaces."
			],
			"agency_name"     => [
				"required" => "The agency name is required.",
			],
			"address1"        => [
				"required" => "The address 1 is required.",
			],
			"address2"        => [
				"required" => "The address 2 is required.",
			],
			"city"            => [
				"required" => "The city is required.",
			],
			"state_msg"           => [
				"required" => "The state is required.",
			],
			"postal_code"     => [
				"required"  => "The postal code is required.",
				"minlength" => "Minimun 5 digits",
				"maxlength" => "Maximun 10 digits",
				"digits"    => "Only digits"
			],
			"country_msg"         => [
				"required" => "The country is required.",
			],
			"phone_number"    => [
				"required"  => "The phone number is required.",
				"minlength" => "Minimun 7 digits",
				"maxlength" => "Maximun 16 digits",
				"digits"    => "Only digits"
			],
			"fax_number"      => [
				"required" => "The fax number is required.",
				"minlength" => "Minimun 7 digits",
				"maxlength" => "Maximun 16 digits",
				"digits"    => "Only digits"
			],
			"email"           => [
				"required" => "The email is required.",
				"email" => "Please enter a valid email address."
			],
			"psw"             => [
				"required" => "The password is required.",
				"minlength" => "Minimun 6 characters"
			],
			"psw-confirm"     => [
				"required" => "The lastname is required.",
				"equalTo"  => "Password not match"
			],
		]
    ],
    "messages" => [
    	'registered'  => 'Your data has been saved successfully.',
    ],
    "email" => [
		"register" => [
			"main"   => 'Dear',
			"p1"     => 'Royal Reservations introduces its Travel Agents portal, where you can get special deals for your customers. Enjoy our top Caribbean destinations: Cancun, Riviera Maya, St. Maarten, Curacao or the Dominican Republic with the most amazing white, sandy beaches and its turquoise waters.',
			"p2"     => 'The commissions for any of the sales are 15% of the total booking amount!',
			"p3"     => 'How do you become part of our Travel Agents special deals list? All you have to do is login to the following link:',
			"social" => 'GET SOCIAL WITH US : ',
			"agency_name"  => "AGENCY'S NAME:",
			"code"         => "ACCREDITATION TYP",
			"iata"         => "ACCREDITATION CODE:",
			"address1"     => "ADDRESS1:",
			"address2"     => "ADDRESS2:",
			"city"         => "CITY:",
			"state"        => "STATE:",
			"postal_code"  => "ZIP CODE:",
			"country"      => "COUNTRY:",
			"phone_number" => "PHONE:",
			"fax_number"   => "FAX:",
			"email"        => "EMAIL:",
		],
		"reset" => [
			"main" => "Hello",
			"p1"   => "You are receiving this email because we received a password reset request for your account.",
			"p2"   => 'If you are having trouble clicking the "Reset Password" button, copy and paste the following URL below into your web browser:',
			"btn"  => "Reset Password"
		]
	],
	'faqs' => [
		[
			'question' => 'What is the Royal Reservations Travel Portal?',
			'answer'   => 'The Royal Resorts family is proud to introduce their new Royal Reservations Travel Agent Portal where you can get access to all of their direct channel deals with special benefits, plus their Travel Agent exclusive non-public discounts. These deals are not available in any GDS or on any other platform. In addition, you will receive an attractive 15% commission for every sale applicable over all their deals!'
		],
		[	
			'question' =>'How do I register?',
			'answer'   =>'On the Royal Reservations Travel Agent Portal Home just type your TRUECODE, IATA, ARC, TIDS in the validation box, push the NEXT button and fill in the form with the required fields and click the SAVE button. You will get a confirmation email message when you are done.'
		],
		[	
			'question' =>'How do I log in?',
			'answer'   =>'On the Royal Reservations Travel Agent Portal Home just type your TRUECODE, IATA, ARC, TIDS in the validation box, push the NEXT button. You will then see a box where you can type your password to log in.'
		],
		[	
			'question' =>'How do I recover my Password?',
			'answer'   =>'On the Royal Reservations Travel Agent Portal Home just type your TRUECODE, IATA, ARC, TIDS in the validation box, push the NEXT button. ou will then see a box where you can type your password to log in and the Forgot Password? option below. Click on the Forgot Password? option and folow the steps to recover it. You will get a Reset Password email in your inbox, click on the Reset Password link and follow the last steps.'
		],
		[	
			'question' =>'How much is the commission percentage I get?',
			'answer'   =>'All registered Travel Agents receive a 15% commission on each sale, as well as exclusive discounts and promotions that are not available in any GDS or other platform. (Commissions based on rate before taxes)'
		],
		[	
			'question' =>'How many Travel Agents per Travel Agency can register?',
			'answer'   =>'You can only register one email per code (TRUECODE, IATA, ARC, TIDS). We recommend that you contact your boss, manager or Host Agency so you can stablish which single email will be registered to your code. In this way many travel agents can share a single email to log in and book. '
		],
		[	
			'question' =>'How do I get my comission payment?',
			'answer'   =>'Once your client has checked out from our resorts, we use our registered Travel Agent booking information from the Travelclick Platform and Onyx Center Source to know the commissionable bookings per registered agent each month.  When the reporitng and data validation ends, the payment process begins. '
		],
		[	
			'question' =>'Who is Onyx Center Source?',
			'answer'   =>'Onyx CenterSource is a leading global provider of B2B payments and business intelligence solutions to the hospitality industry. The company strives to build long-lasting relationships with its partners and is passionate about providing quality customer service, consultative insight and cost-effective solutions. With a legacy dating to 1992, the company facilitates in excess of $2.1 billion in payments annually, partnering with more than 150,000 hotel properties and 200,000 travel booking providers in 160 countries. To learn more please visit <a href="https://www.onyxcentersource.com" target="_blank" rel="noopener noreferrer"">www.onyxcentersource.com</a>'
		],
		[	
			'question' =>'When do I get my commission payment?',
			'answer'   =>'It depends on the following: When your client checkouts from our resorts. Your travel agent /travel agency / host agency data is valid. Please remember you must use our Royal Reservations Travel Agent Portal to book in order to get our exclusive commissions and deals. '
		],
		[	
			'question' =>'How can I verify if my Travel Agency / Host Agency is registered?',
			'answer'   =>'On the Royal Reservations Travel Agent Portal Home just type your TRUECODE, IATA, ARC, TIDS in the validation box, push the NEXT button. If you are prompted with the password screen then that code is already registered. You can also send an email to <a href="mailto:ask4help@royalresorts.com">ask4help@royalresorts.com</a> and we will gladly check our DataBase to validate in the code is already registered.'
		],
		[
			'question' =>'Can I change my personal / agency / Host Agency information?',
			'answer'   =>'You can change your password and  you can call us or send us an email requesting to change your email too. To change the rest of your information (address, postal code, etc.) you can call us or send us an email and we will contact the Travelclick Team to help us with your request. This last process takes up to 72 hours. We will notify you when it is done.'
		],
		[
			'question' =>'Do you have a contact phone number or email?',
			'answer'   =>'"You can call from the U.S.A using our customer service number <a href="tel:18887214420">1-888-721-4420</a> and from the rest of the world: <a href="tel:998-848-8226">(+52) 998-848-8226</a>. You can also send us an email to <a href="mailto:ask4help@royalresorts.com">ask4help@royalresorts.com</a>. If you need assitance with the Onyx platform you can visit the following link: <a href="https://www.onyxcentersource.com/need-assistance/" target="_blank" rel="noopener noreferrer">www.onyxcentersource.com/need-assistance"</a>'
		]

	]
];