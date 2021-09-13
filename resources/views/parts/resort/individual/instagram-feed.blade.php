<section id="instagram-section ">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="h1">{{ __('general.follow_us') }}</h2>
            </div>
        </div>
    </div>

    {{-- <script src="https://apps.elfsight.com/p/platform.js" defer async></script> --}}
    @php 
        $locale = App::getLocale(); 
    @endphp

    @switch($resort)
        @case('the-royal-sands')
            @if($locale == 'en')
                <div class="elfsight-app-3a030e33-bec2-446b-8e30-d1e8a7d30756"></div>
            @else
                <div class="elfsight-app-3f7c8718-3dab-4fc5-bfd8-fc6bb87fc73b"></div>
            @endif
        @break
        @case('the-royal-islander')
            @if($locale == 'en')
                <div class="elfsight-app-fbbfad4d-d8eb-4dcb-bd1b-b8e932dd7f91"></div>
            @else
                <div class="elfsight-app-4fe958b3-25f2-4094-ac6f-aea996c493cb"></div>
            @endif
        @break
        @case('the-royal-caribbean')
            @if($locale == 'en')
                <div class="elfsight-app-25c053a5-74ca-4946-9a93-f0e5e9e382b7"></div>
            @else
                <div class="elfsight-app-f3e81fce-2d67-4f8b-8c5a-6afddd4bc3ad"></div>
            @endif
        @break
        @case('the-royal-cancun')
            @if($locale == 'en')
                <div class="elfsight-app-db3db2da-fc3e-4821-a0e3-89f1b8215f32"></div>
            @else
                <div class="elfsight-app-577c537c-ac21-4add-900e-d1085b81c7be"></div>
            @endif
        @break
        @case('grand-residences-riviera-cancun')
            @if($locale == 'en')
                <div class="elfsight-app-76f7ea27-3ea1-45d4-ae69-c4ea53a0ee94"></div>
            @else
                <div class="elfsight-app-8ffbf5dc-1f29-448a-8fee-3c6930842d33"></div>
            @endif
        @break
        @case('the-royal-haciendas')
            <!-- Falta informacion para el hastag  -->
            @if($locale == 'en')
                <div class="elfsight-app-0016a80b-ae66-49cb-8cee-549e31d0845c"></div>
            @else
                <div class="elfsight-app-b19b7b08-5af0-436e-a757-e5746f1730c8"></div>
            @endif
        @break
        @case('simpson-bay-resort')
            @if($locale == 'en')
                <div class="elfsight-app-9260df4b-c3c6-484f-aea7-200ae9154e53"></div>
            @else
                <div class="elfsight-app-51526122-a127-41b4-97af-1fa07b613eb1"></div>
            @endif
        @break

        @case('the-villas-at-simpson-bay-resort')
            @if($locale == 'en')
                <div class="elfsight-app-7b96f797-242d-4368-a748-45aa907bcf2b"></div>
            @else
                <div class="elfsight-app-969fc7f6-c1dd-4113-a285-7234b8d1c8e4"></div>
            @endif
        @break
        @case('the-royal-sea-aquarium')
            @if($locale == 'en')
                <div class="elfsight-app-032ffad2-ae54-42f3-b84a-5b30b0957016"></div>
            @else
                <div class="elfsight-app-a2cb6c8d-805d-4d40-9c32-48dc369fa0b3"></div>
            @endif
        @break
        @case('casa-de-campo')
            @if($locale == 'en')
                <div class="elfsight-app-7b7615bf-13b4-48fe-ab80-c55b3e51b189"></div>
            @else
                <div class="elfsight-app-1aa847b0-e6e9-48f8-bdb2-c33754ac1981"></div>
            @endif
        @break
        @case('ancora')
            <!-- Falta informacion para el hastag  -->
            @if($locale == 'en')
                <div class="elfsight-app-52fb2bed-152c-4d0a-9609-507e5c5e076c"></div>
            @else
                <div class="elfsight-app-2bccff4d-2e8a-45cd-8006-9b65651fd965"></div>
            @endif
        @break
        @case('royal-uno')
            @if($locale == 'en')
                <div class="elfsight-app-fbbb89f6-fecf-4e19-86ca-83ec9e780c79"></div>
            @else
                <div class="elfsight-app-eaabe146-6b0e-4a36-a05d-25ae56050534"></div>
            @endif
        @break        
    @endswitch



</section>

