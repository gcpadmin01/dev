@extends('/interna')
@section('title',__('agent.title_customer_choice'))
@push('metas')
    <meta name="robots" content="noindex, nofollow">
@endpush
@section('interna')
    <div class="container pading-header">
        <h1>Cookies Policy</h1>
        <br>
        <p>
            Royal Reservations takes the necessary steps to protect personal information from non-authorized use, disclosure, alteration or destruction and to ensure that personal information is always correct and updated according to the Federal Law for the Protection of Personal Information in the Possession of Individuals in effect in Mexico. We also require our employees, associates and service providers to take the necessary measures and make all reasonable efforts to maintain the confidentiality of the personal information that we share with them.
        </p>

        <p>
            For online transactions we use mechanisms to encrypt and secure protocols to protect the transmission of data from our websites to our databases. Unfortunately, Internet transmission mechanisms are inherently unsafe and for this reason, the protection of data during these transmissions cannot be guaranteed.
        </p>

        <p>
            For your own safety and privacy, we recommend that you do not send sensitive information to us via email.
        </p>

        <p>
            Furthermore, in the event that you wish to unsubscribe from market research, customer surveys, newsletters or promotions that are sent to you, you may request this in the same form used to supply personal information by filling in the appropriate area, this will be immediate if requested through the Internet, or an email or address will be supplied so that you may inform us of your decision. Your name and address will be removed within five business days after your request was received.
        </p>

        <a href="#" onclick="consentYes()" style="display: block; text-transform: initial;">I accept the cookies policy.</a>
        <br>
        <a href="#" onclick="consentReallyNo()" style="display: block; text-transform: initial;" >I reject the cookies policy.</a>
        <br>
        <br>
    </div>
@endsection