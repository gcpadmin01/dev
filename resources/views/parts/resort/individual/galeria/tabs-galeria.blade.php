@php
    $total_photos= count( __('resorts/'.$resort.'/gallery.gallery') );
@endphp

<section class="container sec-resort-galery mb-4">
    <div class="row no-gutters  d-flex align-items-stretch">
        <div class="col-md-9 col-12 resort-gallery-container">
            <div class="sec-resort-gallery-content">
                @for($i=0;$i<$total_photos;$i++)
                    @php
                        $category = __('resorts/'.$resort.'/gallery.gallery.'.$i.'.category');
                        $img = __('resorts/'.$resort.'/gallery.gallery.'.$i.'.img');
                    @endphp
                    <div class="{{$category}} li">
                        <div style="background-image: url('{{asset('img/resorts/'.$resort.'/big-gallery/'.$img)}}') ">
                            <img class="w-100 invisible"
                                data-lazy="{{asset('img/resorts/'.$resort.'/big-gallery/'.$img)}}"
                                 title="{{__('resorts/'.$resort.'/gallery.gallery.'.$i.'.alt')}}"
                                 alt="{{__('resorts/'.$resort.'/gallery.gallery.'.$i.'.alt')}}" {{(Agent::isMobile() && !Agent::isTablet())? '' :'width=\"917\" height=\"475px\"' }}/>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
        <div class="col-md-3 col-12 pl-md-0">
            <ul class="gallery-buttons">
                <li>
                    <button value="all" href="#">{{__('general.all')}}</button>
                </li>
                <li>
                    <button value="room" href="#">{{__('general.booking.label.rooms')}}</button>
                </li>
                <li>
                    <button value="areas" href="#">{{__('general.lb_open_areas')}}</button>
                </li>
                <li>
                    <button value="dinning" href="#">{{__('general.lb_dining')}}</button>
                </li>
                <li>
                    <button value="activities" href="#">{{__('general.lb_activities')}}</button>
                </li>
            </ul>
        </div>
        <div class="col-12 resort-gallery-container">
            <div class="sec-resort-gallery-nav d-none d-md-block">
                @for($i=0;$i<$total_photos;$i++)
                    @php
                        $category = __('resorts/'.$resort.'/gallery.gallery.'.$i.'.category');
                        $img = __('resorts/'.$resort.'/gallery.gallery.'.$i.'.img');
                    @endphp
                    <div class="{{$category}} li  pr-1 pl-1">
                        <img class="w-100" data-lazy="{{asset('img/resorts/'.$resort.'/small-gallery/'.$img)}}"
                             title="{{__('resorts/'.$resort.'/gallery.gallery.'.$i.'.alt')}}"
                             alt="{{__('resorts/'.$resort.'/gallery.gallery.'.$i.'.alt')}}"/>
                    </div>
                @endfor
                </div>
        </div>
    </div>
</section>