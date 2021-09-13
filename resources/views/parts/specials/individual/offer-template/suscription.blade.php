@section('javascript')
    <script>



    </script>
@endsection

@php
    $flash=__('special-offer/'.$slug.'.flash');
    $fecha=__('special-offer/'.$slug.'.fecha_fin');
@endphp

<section class="container">
    <div class="row m001land">
        test
      {{ __('special-offer/'.$slug.'.template')}}

    </div>
</section>