<div class="background-left">
    <img loading="lazy" class="mb-1" src="/img/gms/icons/crown.svg" alt="My Royal">
    <h1 class="h2">{{__('gms.Subscribe into your My Royal account')}}</h1>
    <h3 class="h3 mb-5">{{__('years-deals.offer.subtitle_subscribe')}}</h3>
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('gms.sign-up')}}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="sso" value="facebook">
                <input type="hidden" name="language" value="{{ app()->getLocale() }}">
                    <button class="btn btn-facebook" type="submit"
                            data-layer_toggle="click"
                            data-layer_category="GMS"
                            data-layer_action="log in"
                            data-layer_label="landing login facebook">
                        {{__('gms.Login with Facebook')}}
                    </button>
            </form>
        </div>
        <div class="col-md-12">
            <form action="{{route('gms.sign-up')}}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="sso" value="google">
                <input type="hidden" name="language" value="{{ app()->getLocale() }}">
                    <button class="btn btn-google" type="submit"
                            data-layer_toggle="click"
                            data-layer_category="GMS"
                            data-layer_action="log in"
                            data-layer_label="landing login google">
                        {{__('gms.Login with Google')}}
                    </button>
            </form>
        </div>
    </div>
    <div class="clear"></div>
    <h3 class="by-email">{{__('gms.Or by email two')}}</h3>
    <form action="{{route('gms.sign-up')}}" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="sso" value="email">
        <input type="hidden" name="language" value="{{ app()->getLocale() }}">
        {{--<label for="user_gms" style="text-align: left; display: block;" >{{__('gms.Email')}}</label>--}}
        <input id="user_gms" type="text" class="field" name="user" placeholder="{{__('gms.Email')}}" required>
        {{--<label for="password_gms" style="text-align: left; display: block;">{{__('gms.Password')}}</label>--}}
        <input id="password_gms" type="password" class="field mb-3" name="password"  placeholder="{{__('gms.Password')}}" required>
        <button type="submit" class="btn b-azul mb-2"
                data-layer_toggle="click"
                data-layer_category="GMS"
                data-layer_action="log in"
                data-layer_label="landing login email">
            {{__('years-deals.form.Log in')}}
        </button>
    </form>
    <label class="label-forgot-password mb-2">
        {{__('gms.Forgot your password?')}}  <a href="{{route('gms.reset-your-pasword')}}" class="fyp">{{__('gms.click here')}}!</a>
    </label>
    {{-- <div class="log-in-member text-center">
        <p class="text-center">
            {!! __('gms.If you are a Royal Resorts Member') !!}
            <a href="https://app.royalresorts.com/members_login.aspx">{!! __('gms.click here') !!}</a> {{__('gms.to go to the Member´s Section')}}
        </p>
    </div> --}}
</div>