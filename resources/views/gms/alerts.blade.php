@if (session('error'))
    <div class="alert alert-danger" role="alert">
        {{ session('error') }}  
    </div>
@endif

@if(session('success'))
    <div class="alert alert-light" role="alert">
        {{ session('success') }}  
    </div>
@endif

@if(session('loyalty-error'))
    <div class="alert alert-light" role="alert">
        {{ session('loyalty-error') }}  
    </div>
@endif

@if(isset($customMessage) && !empty($customMessage))
    @if($customMessage['code'] == 200)
        <div class="alert alert-light" role="alert">
            {{ __('gms.'.$customMessage['message']) }}
        </div>
    @endif

    @if($customMessage['code'] != 200)
        <div class="alert alert-danger" role="alert">
            {{ __('gms.'.$customMessage['message']) }}
        </div>
    @endif

@endif