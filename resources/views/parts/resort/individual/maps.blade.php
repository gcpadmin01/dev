@php
    $total_things = count( __('resorts/'.$resort.'/fact-sheet.things') );
@endphp
<section class="container things-to-do-section things-to-do-container resort-container mb-4">
    <div class="row mb-4">
        <div class="col-12">
            <h3 class="e9 text-uppercase">{{__('resorts/'.$resort.'/fact-sheet.near_title')}}</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-8">
            <div id="maps" style="height: 400px"></div>
        </div>
        <div id="things-to-do" class="col-12 col-md-4">
            <div class="ul p-0 pt-2">
                @for($i=0;$i<$total_things;$i++)
                    @php 
                        $item = __('resorts/'.$resort.'/fact-sheet.things.'.$i);
                        $img = '/img/resorts/'.$resort.'/near-by-things-to-do/'.$item['image']['src'];
                    @endphp
                    <div class="li e8 todo-{{ str_slug( $item['title']) }} position-map" data-map="maps" data-point="{{$item['place_interesting']}}">
                        <img
                            class="lazyload"
                            data-src="{{$img}}"
                            data-webp="{{__webp($img) }}"
                            title="{{$item['image']['alt']}}"
                            alt="{{__('resorts/'.$resort.'/fact-sheet.things.'.$i.'.image.alt')}}"/>
                        <span>{{$item['title']}}</span>
                    </div>
                @endfor
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="ul things-to-do p-0 pt-2" style="display: none;">
                @for($i=0;$i<$total_things;$i++)
                    @php 
                        $item = __('resorts/'.$resort.'/fact-sheet.things.'.$i);
                        $img =  '/img/resorts/'.$resort.'/near-by-things-to-do/'.$item['image']['src'];
                    @endphp
                    <div class="li e8 text-center todo-{{ str_slug( $item['title']) }} position-map" data-map="maps" data-point="{{$item['place_interesting']}}">
                        <img
                            class="lazyload"
                            data-src="{{ $img }}"
                            data-webp = "{{__webp($img)}}"
                            title="{{$item['image']['alt']}}"
                            alt="{{__('resorts/'.$resort.'/fact-sheet.things.'.$i.'.image.alt')}}"/>
                        <span>{{$item['title']}}</span>
                    </div>
                @endfor
            </div>
        </div>
    </div>
</section>
@push("scripts")
    <script type="text/javascript">
        var resorts = {!!$allResort!!};
        var places  = {!!$places!!};
        var local   = '{{$location}}'.split(',');
        var resort  = '{{__('resorts/'.$resort.'/fact-sheet.map_title')}}';
        var ASSET   = '{{url('/')}}';
    </script>

    {{-- <script type="text/javascript" src="{{mix('js/_maps_resorts.js')}}"></script> --}}
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOHGOzkzJ3h5GSLybxxKp1lqq6S-ITl3Y&callback=initMap" async defer></script>--}}
@endpush