@push('dataLayer')
    <script type="text/javascript">
        dataLayer = [{
            'domain':'royalreservations.com',
            'section':'{{$section}}',  
            'page':'{{$page}}', 
            'siteLanguage':'{{App::getLocale()}}', 
        }];
    </script>

    <script> var TPW = {"category":"{{$section}}","item":"{{$page}}"}; </script>
@endpush