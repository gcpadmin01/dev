<section class="container map-destination pb-4">
    <div class="row">
        @if(!isset($resorts))
            <iframe src="{{ __('destinations/'.$destino.'.map')}}" width="1300" height="383" frameborder="0" style="border:0" allowfullscreen></iframe>
        @else
            <div id="maps" style="width: 100%;height: 400px"></div>
        @endif
    </div>

    <div class="row no-gutters usefull-information-destination pt-3 pb-3 ">
        <label class="col-sm-6 col-md-4 col-lg-2 p-2 font-weight-bold">
            {{ __('destinations/'.$destino.'.about.self') }}
        </label>
        <label class="col-sm-6 col-md-4 col-lg-2 p-2 icon icon-money">
            {{ __('destinations/'.$destino.'.about.uselful.money') }}
        </label>
        <label class="col-sm-6 col-md-4 col-lg-2 p-2 icon icon-msg">
            {{ __('destinations/'.$destino.'.about.uselful.language') }}
        </label>
        <label class="col-sm-6 col-md-4 col-lg-2 p-2 icon icon-sunny">
            {{ __('destinations/'.$destino.'.about.uselful.weather') }}
        </label>
        <label class="col-sm-6 col-md-4 col-lg-2 p-2 icon icon-power">
            {{ __('destinations/'.$destino.'.about.uselful.power_socket') }}
        </label>
        <label class="col-sm-6 col-md-4 col-lg-2 p-2 icon icon-cellphoneservice">
            {{ __('destinations/'.$destino.'.about.uselful.cell-phone-service') }}
        </label>
        {{--
        <div class="col-sm-6 col-md-4 col-lg-2 p-2 text-center">
            <label class="font-weight-bold">{{ __('destinations/'.$destino.'.about.self') }}</label>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-2 p-2">
            <label class="icon icon-money">
                {{ __('destinations/'.$destino.'.about.uselful.money') }}
            </label>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-2 p-2">
            <label class="icon icon-msg">{{ __('destinations/'.$destino.'.about.uselful.language') }}</label>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-2 p-2">
            <label class="icon icon-sunny">{{ __('destinations/'.$destino.'.about.uselful.weather') }}</label>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-2 p-2">
            <label class="icon icon-power">{{ __('destinations/'.$destino.'.about.uselful.power_socket') }}</label>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-2 p-2">
            <label class="icon icon-cellphoneservice">{{ __('destinations/'.$destino.'.about.uselful.cell-phone-service') }}</label>
        </div>
        --}}
    </div>
</section>