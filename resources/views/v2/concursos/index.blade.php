@extends('/interna')

@section('title', $title)
@include('parts.scripts',['section' => $section, 'page' => $page])

@push('metas')
    <meta name="robots" content="noindex, nofollow">
@endpush

@section("metadescription","Participa en ¡VOY A GANAR!, y obtén la posibilidad de ser acreedor de una estancia en uno de los desarrollos de Royal Resorts en Cancún y Riviera Maya.")

@section('interna')
    <div class="sec-voy-a-ganar pading-header">
        <div class="sec-1">
            <h1>
                <img class="logo" src="/img/concursos/logo.svg" alt="Voy a ganar">
            </h1>
            <p>
               Royal Reservations® reconoce tu lealtad a través de un concurso llamado “VOY A GANAR”, donde podrás ser premiado con estancias en distintos desarrollos de Royal Resorts®, ubicados en CANCÚN y RIVIERA MAYA; mismos, que ofrecen suites amplias y totalmente equipadas, servicios de cinco estrellas y todo con la inigualable hospitalidad mexicana. <a target="_blank" href="{{route('concursos.terminos')}}"> Consulta aquí nuestros términos y condiciones </a>
            </p>
        </div>
        <div class="sec-2"> 
            <div class="sec-2-1">
                <div>
                    <h2 class="h1">
                        ¡#VOYAGANAR ESTÁ DE VUELTA!
                    </h2>
                                       
                    {{-- <p class="p-1" >
                         Próximo concurso en...  
                    </p> --}}
                   
                    {{-- <img class="counter" src="https://i.countdownmail.com/8ac25.gif"> --}}
                    
                    {{-- <p class="p-1" style="text-align: center">                        
                        <small>Nos vemos el martes 14 de Julio, 2020 a las 10 hrs (horario de Cancún) en nuestras redes sociales:</small>
                    </p>
                    --}}
                    
                    <p class="p-1" style="text-align: center">
                        Entérate, Participa y Gana una estancia en #RoyalResorts.
                    </p>

                    <p class="p-1" style="text-align: center">
                        ¡Quédate pendiente de nuestras redes sociales, tú puedes ser el ganador de la próxima dinámica!
                    </p>
                    

                    {{--
                    <h2 class="h1">
                        ¡VOLVEREMOS PRONTO!
                    </h2>

                    <p class="p-1" >
                         Próximo concurso en...  
                    </p>
                    --}}
                    {{-- <img class="counter" src="https://i.countdownmail.com/8ac25.gif"> --}}
                    {{--
                    <p class="p-1">                        
                        <small>Nos vemos el miércoles 18 de Diciembre, 2019 a las 10 hrs (horario de Cancún) en nuestras redes sociales:</small>
                    </p>
                    --}}
                    
                    {{-- <p class="p-1">
                        Gracias por ser parte de nuestros seguidores más fieles en redes sociales y por participar en nuestro concurso #VOYAGANAR. 
                    </p>

                    <p class="p-1">
                        Te informamos que debido a la situación por la que el mundo atraviesa en estos momentos nuestras dinámicas se pausarán, pero te invitamos a seguir soñando con esas vacaciones únicas en la playa, pues regresaremos llenos de energía y con una gran sonrisa para servirte.
                        <br><br>
                        Mientras tanto, <strong>¡síguenos en nuestras redes sociales y vive unas increíbles vacaciones virtuales! </strong>
                    </p> --}}

                    @php 
                            $facebookLink =  'https://www.facebook.com/RoyalReservations';
                            if (\Agent::isMobile() || Agent::isTablet()) {
                                $facebookLink = 'https://m.facebook.com/RoyalReservations';
                            }
                        @endphp
                    <div class="social-links">
                        <a target="_blank" href="{{ $facebookLink }}">
                            <img src="/img/concursos/facebook.svg" alt="Facebook Royal Reservations">
                        </a>
                        <a target="_blank" href="https://twitter.com/royalRSV">
                            <img src="/img/concursos/twitter.svg" alt="Twitter Royal Reservations">
                        </a>
                        <a target="_blank" href="https://www.instagram.com/royalreservations/">
                            <img src="/img/concursos/instagram.svg" alt="Instagram Royal Reservations">
                        </a>
                    </div>

                </div>
            </div>

            <div class="sec-2-2">
                <img src="/img/concursos/girlflaming-small.png" alt="Flamingo">
            </div>
        </div>
        <div class="sec-3" id="open-modal">
            <div class="box">
                <div>
                    <p style="marging-bottom: 10px !important">DINÁMICA</p>
                    <div class="b-1">
                        @php 
                            $dinamicaUrl =  'https://www.facebook.com/RoyalReservations';
                            if (\Agent::isMobile() && !\Agent::isTablet()) {
                                $dinamicaUrl = 'https://m.facebook.com/RoyalReservations';
                            }
                            //$dinamicaUrl =  'https://www.facebook.com/RoyalReservations/photos/a.1059687400730961/3527319893967687';
                            //if (\Agent::isMobile() && !\Agent::isTablet()) {
                            //    $dinamicaUrl = 'https://m.facebook.com/story.php?story_fbid=3527319893967687&substory_index=0&id=1053145294718505';
                            //}
                        @endphp
                        <a target="_blanck" href="{{ $dinamicaUrl }}">
                            <img src="/img/concursos/voy-a-ganar/dinamica.png" alt="Voy a ganar">
                            {{--<img src="/img/concursos/voy-a-ganar/dinamica-facebook.jpg">--}}
                        </a>
                    </div>
                </div>
                <div>
                    <p style="marging-bottom: 10px !important">GANADOR</p>
                    <div class="b-1 b1-u">
                        <a target="_blanck" href="https://business.facebook.com/pg/RoyalReservations/photos/?tab=album&album_id=2734160386616979">
                            <img src="/img/concursos/voy-a-ganar/ganador.png" alt="Ganador Royal Reservations">
                        </a>
                    </div>
                </div>
                <div>
                    <p style="marging-bottom: 10px !important">PREMIO</p>
                    <div class="b-1">                        
{{--                        <a target="_blanck" href="https://royalreservations.com/es/hoteles-de-playa/the-royal-sands?utm_source=social&utm_medium=facebook&utm_campaign=concursocial&utm_term=ongoing&utm_content=Mexico">--}}
{{--                            <video autoplay loop muted="muted" controls>--}}
{{--                                <source src="/img/concursos/voy-a-ganar/voy-a-ganar-trc.mp4?v=2" >--}}
{{--                            </video>--}}
{{--                        </a>--}}

                         <img src="/img/concursos/voy-a-ganar/premio.gif" alt="Premio Royal Reservations">
                        {{--
                        <iframe width="313" height="188" src="https://www.youtube.com/embed/arXehVpLsWo?autoplay=1&loop=1&playlist=arXehVpLsWo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        --}}
                    </div>
                </div>
            </div>
            {{--
            <p class="premio">
                *PREMIO: Una estancia para 2 adultos y 2 niños por 3 días y 2 noches en Plan Todo Incluido en THE ROYAL SANDS en CANCÚN 
            </p>
            --}}
            <p>
                Suscríbete a nuestro newsletter para ser el primero en enterarte de nuestros próximos concursos, noticias y promociones.
            </p>

            <button class="btn-subscribe"  data-toggle="modal" data-target="#myModal" >SUSCRíBETE</button>

            {{--<a class="terms" target="_blank" href="{{route('concursos.terminos')}}">Términos y condiciones</a>--}}

        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            {{-- <div class="modal-header"> --}}
                {{-- <h4 class="modal-title" id="myModalLabel">Modal title</h4> --}}
            {{-- </div> --}}
            
          <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="font-size: 2rem;position: absolute;top: -5px;right: 5px;">
                    <span aria-hidden="true">&times;</span>
                </button>
                <!-- Begin Mailchimp Signup Form -->
                <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
                <style type="text/css">
                    #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
                    /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
                       We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                </style>
                <div id="mc_embed_signup">
                    <form action="https://royalresorts.us3.list-manage.com/subscribe/post?u=25ad1aa5fd80b6bbf52072b3d&amp;id=ccd457bbd8" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        
                        <div id="mc_embed_signup_scroll">
                            <h2 style="text-align: center;">¡Sé el primero en enterarte de nuestros Próximos Concursos!</h2>
                            <div class="indicates-required">
                                <span class="asterisk">*</span> Campos requeridos
                            </div>

                            <div class="mc-field-group">
                                <label for="mce-EMAIL">Correo  <span class="asterisk">*</span>
                            </label>
                                <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                            </div>

                            <div class="mc-field-group">
                                <label for="mce-FNAME">Nombre </label>
                                <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
                            </div>

                            <div class="mc-field-group">
                                <label for="mce-MMERGE2">País </label>
                                <select name="MMERGE2" class="" id="mce-MMERGE2">
                                    <option value=""></option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="United States of America">United States of America</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Chile">Chile</option>
                                    <option value="Other (LATAM)">Other (LATAM)</option>
                                    <option value="Other (EUROPE)">Other (EUROPE)</option>
                                    <option value="Other (ASIA)">Other (ASIA)</option>
                                    <option value="Other (AFRICA)">Other (AFRICA)</option>
                                    <option value="Australia">Australia</option>
                                </select>
                            </div>

                            <div class="mc-field-group">
                                <label for="mce-MMERGE4">Idioma  <span class="asterisk">*</span></label>
                                <select name="MMERGE4" class="required" id="mce-MMERGE4">
                                    <option value=""></option>
                                    <option value="English">English</option>
                                    <option value="Español">Español</option>
                                </select>
                            </div>

                            <div class="mc-field-group input-group">
                                <strong>Autorización  <span class="asterisk">*</span></strong>
                                
                                <ul>
                                    <li>
                                        <input type="radio" value="I grant my permission to be suscribed to the mailing lists of Royal Resorts / Deseo suscribirme a las listas de correo de Royal Resorts." name="MMERGE3" id="mce-MMERGE3-0" required>
                                        <label for="mce-MMERGE3-0">Deseo suscribirme a las listas de correo de Royal Resorts.</label>
                                    </li>
                                </ul>
                            </div>
                        
                            <div id="mce-responses" class="clear">
                                <div class="response" id="mce-error-response" style="display:none"></div>
                                <div class="response" id="mce-success-response" style="display:none"></div>
                            </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->

                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_25ad1aa5fd80b6bbf52072b3d_ccd457bbd8" tabindex="-1" value=""></div>
                            <div class="clear"><input type="submit" value="Suscríbete" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                        </div>
                    </form>
                </div>
                <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='MMERGE2';ftypes[2]='dropdown';fnames[4]='MMERGE4';ftypes[4]='dropdown';fnames[3]='MMERGE3';ftypes[3]='radio'; /*
                 * Translated default messages for the $ validation plugin.
                 * Locale: ES
                 */
                $.extend($.validator.messages, {
                  required: "Este campo es obligatorio.",
                  remote: "Por favor, rellena este campo.",
                  email: "Por favor, escribe una dirección de correo válida",
                  url: "Por favor, escribe una URL válida.",
                  date: "Por favor, escribe una fecha válida.",
                  dateISO: "Por favor, escribe una fecha (ISO) válida.",
                  number: "Por favor, escribe un número entero válido.",
                  digits: "Por favor, escribe sólo dígitos.",
                  creditcard: "Por favor, escribe un número de tarjeta válido.",
                  equalTo: "Por favor, escribe el mismo valor de nuevo.",
                  accept: "Por favor, escribe un valor con una extensión aceptada.",
                  maxlength: $.validator.format("Por favor, no escribas más de {0} caracteres."),
                  minlength: $.validator.format("Por favor, no escribas menos de {0} caracteres."),
                  rangelength: $.validator.format("Por favor, escribe un valor entre {0} y {1} caracteres."),
                  range: $.validator.format("Por favor, escribe un valor entre {0} y {1}."),
                  max: $.validator.format("Por favor, escribe un valor menor o igual a {0}."),
                  min: $.validator.format("Por favor, escribe un valor mayor o igual a {0}.")
                });}(jQuery));var $mcj = jQuery.noConflict(true);</script>
                <!--End mc_embed_signup-->
          </div>
          <!--
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
            -->
        </div>
      </div>
    </div>



    <link rel="stylesheet" type="text/css" href="{{ mix('css/voy-a-ganar.css') }}" integrity="{{ Sri::hash('css/voy-a-ganar.css') }}" crossorigin="anonymous">
    @push('scripts')
        <script src="{{mix('js/_concursos.js')}}" integrity="{{ Sri::hash('js/_concursos.js') }}" crossorigin="anonymous"></script>
    @endpush
@endsection