@php
    $total_reviews = count( __('resorts/'.$resort.'/reviews.reviews') );
@endphp

<section class="review">
    @for($i=0;$i<$total_reviews;$i++)
        <div class="review-item">
            <div class="container">
                <div class="item py-4">
                    <div class="row">
                        <div class="col-md-4 col-12 d-flex align-items-center justify-content-center">
                            <div class="user">
                                <img class="img" src="{{ asset('/img/user-icon.png')}}" alt="review icon">
                                <p class="name">
                                    {{__('resorts/'.$resort.'/reviews.reviews.'.$i.'.person.name')}}
                                </p>
                                <p class="date">
                                    {{__('resorts/'.$resort.'/reviews.reviews.'.$i.'.date')}}
                                </p>
                                <label class="tag">
                                    {{__('resorts/'.$resort.'/reviews.reviews.'.$i.'.label')}}
                                </label>
                            </div>
                        </div>

                        <div class="col-md-8 col-12 d-flex align-items-center justify-content-center">
                            <div class="comment">
                                <label class="title">{{__('resorts/'.$resort.'/reviews.reviews.'.$i.'.title')}}</label>
                                <p class="content">
                                    <span>"</span>
                                    {!!__('resorts/'.$resort.'/reviews.reviews.'.$i.'.content')!!}
                                    <span>"</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    @endfor
</section>