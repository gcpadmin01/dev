@php
    $total_resorts = __('resorts/'.$resort.'/gallery.resorts');
    $sameResorts = __('resorts/'.$resort.'/gallery.resorts');
@endphp
@if(is_array($sameResorts))
    <section class="container">
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="h1">
                    {{__('resorts/'.$resort.'/gallery.resorts_title')}}
                </h2>
            </div>
        </div>

        @if($resort != 'royal-uno')
            <div class="row mb-4">
                @if(is_iterable($total_resorts))
                    @foreach($total_resorts as $resortItem)
                        @php
                            $img_temp= $resortItem['img'];
                            $img =  asset('img/resorts'.$img_temp);
                        @endphp
                        <div class="col-md-4 col-sm-6 col-12 mb-2">
                            <div class="card card-v1">
                                <img class="w-100" src="{{$img}}" alt="{{$resortItem['name']}}">
                                <div class="card-body">
                                    <a class="card-title d-block mb-0" href="{{ lang_url($resortItem['url']) }}">
                                        {{$resortItem['name']}}
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        @endif
    </section>
@endif