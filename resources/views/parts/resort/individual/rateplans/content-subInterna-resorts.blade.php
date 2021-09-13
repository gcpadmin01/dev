@php
  $img=__('resorts/'.$resort.'/'.$interna.'.banner2');
  $alt=__('resorts/'.$resort.'/'.$interna.'.alt_banner2');

  $img2=__('resorts/'.$resort.'/'.$interna.'.banner3');
  $alt2=__('resorts/'.$resort.'/'.$interna.'.alt_banner3');
@endphp
<section class="container pb-2 mtop-10">
  <div class="subInterna-resorts subinterna">
    <div class="row no-gutters pt-4" >
      <div class="col-12 px-0" >
        <h1 class="resort-title pt-4 pb-3 pb-md-0">{{__('resorts/'.$resort.'/'.$interna.'.h1')}}</h1>
        <p class="resort-subtitle av-blue text-uppercase">{{__('resorts/'.$resort.'/'.$interna.'.subtitle')}}</p>
      </div>
    </div>
    @if($img!='')@php $col=6; @endphp @else  @php $col=12; @endphp  @endif
    <div class="row no-gutters" >
      <div class="col-md-{{$col}} col-12 text-justify pr-md-4 px-0">
        {!! __('resorts/'.$resort.'/'.$interna.'.description1')!!}
      </div>

      @if($img!='')
      <div class="col-md-6 col-12 img-subInterna-resort-right" style="background-image: url({{ $img }});"></div>
      @endif
    </div>

    @if(__('resorts/'.$resort.'/'.$interna.'.description2')!='')
    <div class="row no-gutters pt-4" >
      <div class="col-12 text-justify px-0" style="" >
        {!! __('resorts/'.$resort.'/'.$interna.'.description2')!!}
      </div>
    </div>
    @endif

    @if($img2!='')
    <div class="row no-gutters pt-4" >
      <div class="col-12 banner-subInterna" style=" background-image: url({{ $img2 }});">
      </div>
    </div>
    @endif

    @if(__('resorts/'.$resort.'/'.$interna.'.description3')!='')
    <div class="row no-gutters pt-4" >
      <div class="col-12 text-justify px-0" style="" >
        {!! __('resorts/'.$resort.'/'.$interna.'.description3')!!}
      </div>
    </div>
    @endif

  </div>

</section>