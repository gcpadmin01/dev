@php
    $offer = (App::getLocale() == 'es' && __country()== 'MX') ? 'black_friday':'black_friday';
@endphp
<script type="text/javascript">
    var countries = @include('countries');
</script>
<div class="modal fade modal-gms" id="modal-gms" tabindex="-1" role="dialog" aria-labelledby="modal-gms" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">

                    {{--<div class="col-6 d-none d-md-block img-modal">
                        <img loading="lazy" src="/img/gms/gms-modal.png" alt="My Royal" title="My Royal">
                    </div>--}}
                    {{-- <img class="img-pop" loading="lazy" src="{{__('gms.'.$offer.'_img')}}" alt="My Royal" title="My Royal" > --}}
                    <img class="img-pop" loading="lazy" src="{{asset('img/gms/gms-modal.png')}}" alt="My Royal" title="My Royal" >

                    <div class="text-offers d-none">
                        <p>{{__('gms.'.$offer.'_p1')}}</p>
                        <h2>{{__('gms.'.$offer.'_p2')}}</h2>
                    </div>

                    <div class="modal-body row no-gutters">
                        <div class="col-12 col-md-5 offset-md-7">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <p class="title">
                                {!! __('gms.pop_title') !!}
                            </p>

                            <p class="normal">
                                {{__('gms.pop_describe')}}
                            </p>

                            <p class="disclaimer">{{__('gms.pop_disclaimer')}}</p>
                            
                            <ul>
                                {!! __('gms.pop_list') !!}
                            </ul>

                            <p>
                                {{ __('gms.pop_subtitle2') }}
                            </p>
                        </div>


                    </div>

                    <div class="modal-body modal-body-gray register-email row no-gutters">
                        <div class="col-12 col-md-5 offset-md-7">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="log-in">{{__('gms.register')}}</span>
                                <form action="{{route('gms.sign-up')}}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="sso" value="facebook">
                                    <input type="hidden" name="language" value="{{ app()->getLocale() }}">

                                    <button class="btn btn-facebook" type="submit"
                                            data-layer_toggle="click"
                                            data-layer_action="register"
                                            data-layer_category="GMS"
                                            data-layer_label="pop up {{$page}} facebook">
                                        <img src="/img/gms/icons/facebook.svg" loading="lazy" alt="{{__('gms.Login with Facebook')}}">
                                    </button>
                                </form>
                                <form action="{{route('gms.sign-up')}}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="sso" value="google">
                                    <input type="hidden" name="language" value="{{ app()->getLocale() }}">
                                    <button class="btn btn-google" type="submit"
                                            data-layer_toggle="click"
                                            data-layer_action="register"
                                            data-layer_category="GMS"
                                            data-layer_label="pop up {{$page}} google">
                                        <img loading="lazy" src="/img/gms/icons/google.svg" alt="{{__('gms.Login with Google')}}">

                                    </button>
                                </form>
                            </div>

                            <p>{{__('gms.Or by email')}}</p>

                            <form action="{{route('gms.register')}}" method="POST" class="form-modal-gms">
                                {{ csrf_field() }}
                                <input type="hidden" name="sso" value="email">
                                <input type="hidden" name="language" value="{{ app()->getLocale() }}">

                                <div>
                                    <input type="text" class="field" name="name" placeholder="{{__('gms.Name')}}" required>
                                    <div class="error"></div>
                                </div>
                                <div>
                                    <input type="text" class="field" name="email" placeholder="{{__('gms.Email')}}" required>
                                    <div class="error"></div>
                                </div>
                                <div>
                                    <input type="password" class="field" name="password" placeholder="{{__('gms.Password')}}" required>
                                    <div class="error"></div>
                                </div>

                                <div>
                                    <select style="width: 100%" id="gms-countries-modal" name="country" class="field" required>
                                    </select>
                                    <div class="error"></div>
                                </div>


                                <div class="d-flex justify-content-center align-items-center">
                                    <button type="submit" class="btn b-azul"
                                            data-layer_toggle="click"
                                            data-layer_action="register"
                                            data-layer_category="GMS"
                                            data-layer_label="pop up {{$page}} email" >
                                        {{__('gms.Sign up')}}
                                    </button>
                                    <a href="{{route('gms.sign-up')}}" class="fyp">{{__('gms.Log in')}}</a>
                                </div>

                            </form>

                            <label class="terms">
                                {{__('gms.Copyright 2018 Royal Reservations')}}
                                <a href="{{ lang_url("/".Lang::get('routes.about_us')."/".__('routes.terms_of_use')) }}" >
                                    {{__('gms.terms-conditions')}}
                                </a>
                            </label>
                        </div>
                    </div>
        </div>
    </div>
</div>