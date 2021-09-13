@extends('/interna')
@section('interna')
    @component('/parts/scripts', ['section'=>'Destinations', 'page'=>'offers '.$destino]) @endcomponent
    @component('parts/extras/breadcrum-level-3', ['page'=>$page,'destino'=>$destino,'subinterna'=>$subinterna, 'class' => 'pading-header'])@endcomponent
    @component('v2.parts.destination.offer-destination',[
        'destino'=>$destino,
        'resorts' => $resorts
    ])
    @endcomponent
@endsection