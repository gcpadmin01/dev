@section('javascript')
    <script src="{{ asset('js/timeCircles.min.js') }}"></script>
    <script>
        //$("#js-countdown").TimeCircles();


        $("#js-countdown")
            .TimeCircles({
                ref_date: new Date(2018, 12, 0, 18, 0, 0, 0), //year, monthindex, day, hours, min, seg, mili
                start: true,
                refresh_interval: 0.1,
                count_past_zero: true,
                circle_bg_color: "#DEDEDE",
                use_background: true,
                fg_width: 0.10,
                bg_width: 0.5,
                time: {
                    Days: {show: true, text: "Days", color: "#ff0000"},
                    Hours: {show: true, text: "Hours", color: "#ff0000"},
                    Minutes: {show: true, text: "Minutes", color: "#ff0000"},
                    Seconds: {show: true, text: "Seconds"pp, color: "#ff0000"}
                }
            })
            .rebuild();
    </script>
@endsection

@php
    $flash=__('special-offer/'.$slug.'.flash');
    $fecha=__('special-offer/'.$slug.'.fecha_fin');
@endphp

<section class="container">
    <div class="row m001land">
        <div class="col-md-{{ $flash==1?8:12}}">
            <h1 class="h1">{{__('special-offer/'.$slug.'.title')}}</h1>
            <p class="h2">{{__('special-offer/'.$slug.'.subtitle1')}}</p>
            <p>{!! __('special-offer/'.$slug.'.description1') !!}</p>
            <h2 class="h2">{{__('special-offer/'.$slug.'.subtitle2')}}</h2>
            <p>{!! __('special-offer/'.$slug.'.description2') !!}</p>
        </div>

        @if($flash == "1")
            <div class="col-md-4 text-left">
                <div class="ag-format-container">
                    <p class="txtResaltado">{{__('special-offer/'.$slug.'.reloj_title')}}</p>
                    <div id="js-countdown" data-date="2018-12-24 23:59:00"></div>
                </div>
            </div>
        @endif
    </div>
</section>