@php
    $total_reviews = __('resorts/'.$resort.'/reviews.reviews');
    $total_reviews = is_array($total_reviews) ? count($total_reviews):0;
@endphp

<section class="review">
    @foreach($reviewsData as $review)
        <div class="review-item">
            <div class="container">
                <div class="item py-4">
                    <div class="row">
                        <div class="col-md-4 col-12 d-flex align-items-center justify-content-center">
                            <div class="user">
                                <img class="img" src="{{ asset('/img/user-icon.png')}}" alt="User">
                                <p class="name">
                                    {{$review->traveler_name}}
                                </p>
                                <p class="date">
                                    {{ __date('dates.SHORT_YEAR',$review->review_date) }}
                                </p>
                                <label class="tag">
                                    {{ __elq($review->_type, 'name_'.\App::getLocale()) }}
                                </label>
                            </div>
                        </div>

                        <div class="col-md-8 col-12 d-flex align-items-center justify-content-center">
                            <div class="comment">
                                <label class="title">
                                    {{$review->title}}
                                </label>
                                <p class="content">
                                    <span>"</span>
                                    {!! $review->review !!}
                                    <span>"</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endforeach
</section>