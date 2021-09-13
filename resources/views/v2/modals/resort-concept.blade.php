{{--
    Modal para mostrar la informacion del concepto tabla "ConceptResort"
--}}
@php
    $gmsClient = app('App\GMS\GMSClient');
    $hasPrivateOffer = false;
    if(!$gmsClient->isGuest() && $resort->hasPrivateOffer()  ){
        $hasPrivateOffer = true;
    }
@endphp
<div class="modal fade modal-concept" id="masinformacionoferta-{{$resort->id}}" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-title">
                    {{$resort->resort->name}}<br>
                    <b>{{$resort->concept->content->title}}</b>
                </span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {!! $resort->content->description !!}
                <p>
                    {{ __('general.book from') }} {{ ucfirst(__date('dates.SHORT', $resort->concept->booking_window_start)) }} {{__('general.to')}} {{ ucfirst(__date('dates.SHORT', $resort->concept->booking_window_end)) }} <br>
                    {{__('general.travel between')}} {{ ucfirst(__date('dates.SHORT_YEAR', $resort->travel_start)) }} {{__('general.and') }} {{ ucfirst(__date('dates.SHORT_YEAR', $resort->travel_end)) }}
                </p>

                <p>
                    <b>{{$resort->content->label}}</b>
                </p>

                <p>
                    <b>{{__('general.This Promotion includes')}}:</b>

                    <ul>
                        @foreach($resort->content->inclusion as $inclusion)
                            <li>{{$inclusion}}</li>
                        @endforeach
                    </ul>
                </p>

                <div class="terms">
                    {!! ($hasPrivateOffer)? $resort->content->private_offer['terms'] : $resort->content->terms  !!}
                </div>
            </div>
        </div>
    </div>
</div>