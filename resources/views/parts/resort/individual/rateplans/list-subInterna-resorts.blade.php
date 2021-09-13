@php


  $total_list=__('resorts/'.$resort.'/'.$interna.'.list_inclusions');
  $total_list2=__('resorts/'.$resort.'/'.$interna.'.list_inclusions2');

  $total_list=$total_list == "" ? 0:count($total_list);
  $total_list2=$total_list2 == "" ? 0:count($total_list2);

@endphp
<section class="container" >
  <div class="row no-gutters">
    <div class="col-12 av-skyblue" >
      <h3 class="font-size-1point5-movil" >{{ (__('resorts/'.$resort.'/'.$interna.'.list_title')!='')? __('resorts/'.$resort.'/'.$interna.'.list_title'):''}}</h3>
    </div>
  </div>

  <div class="row no-gutters py-5 list-rate-planes">
    <div class="col-md-2 col-12 d-flex align-items-center justify-content-start" >
      <h5>{{(__('resorts/'.$resort.'/'.$interna.'.list_subtitle')!='')?__('resorts/'.$resort.'/'.$interna.'.list_subtitle'):''}}</h5>
    </div>
    <div class="av-fontsize-point9 col-md-10 col-12 av-gray">
      @if($total_list>1)
      <ul class="resorts-amenities">
        @for($i=0;$i<$total_list;$i++)
        <li class="amenity-{{__('resorts/'.$resort.'/'.$interna.'.list_inclusions.'.$i.'.icon')}}">{{ (__('resorts/'.$resort.'/'.$interna.'.list_inclusions.'.$i.'.title') !='')? __('resorts/'.$resort.'/'.$interna.'.list_inclusions.'.$i.'.title'):''}}</li>
        @endfor
      </ul>
      @endif
    </div>
  </div>

  <div class="row no-gutters py-5 list-rate-planes border-bottom-0" >
    <div class="col-md-2 col-12 d-flex align-items-center justify-content-start ">
      <h5>{{(__('resorts/'.$resort.'/'.$interna.'.list_subtitle2')!='')? __('resorts/'.$resort.'/'.$interna.'.list_subtitle2'):''}}</h5>
    </div>

    <div class="av-fontsize-point9 col-md-10 col-12 " style="" >
      @if($total_list2>1)
      <ul class="resorts-amenities">
        @for($i=0;$i<$total_list2;$i++)
        <li class="amenity-{{__('resorts/'.$resort.'/'.$interna.'.list_inclusions2.'.$i.'.icon')}}">{{__('resorts/'.$resort.'/'.$interna.'.list_inclusions2.'.$i.'.title')}}</li>
        @endfor
      </ul>
      @endif
    </div>

  </div>

</section>