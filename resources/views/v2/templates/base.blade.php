@extends('/interna')

@push('metas')
    <meta name="robots" content="noindex, nofollow">
@endpush

@push('styles')
    <link rel="stylesheet" href="{{ mix('css/video.css') }}">
@endpush

@section('interna')
    <div class="contain-video">
        <div class="full-video">
            <iframe id="ytplayer" type="text/html" src="https://www.youtube.com/embed/49Xm2im1wXA?autoplay=1&controls=0&loop=1&mute=1&playlist=49Xm2im1wXA" frameborder="0" allowfullscreen></iframe>
            {{-- <iframe src="https://player.vimeo.com/video/422679405?autoplay=1&title=0&byline=0&portrait=0&loop=1" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe> --}}
        </div>
    </div>
    <section class="container ">

        
    </section>
@endsection