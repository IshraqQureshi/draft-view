@extends('layouts.frontend')

@section('content')

<section id="page--header">
    <div class="container">
        <div class="page--header-heading">
            <h1>Our Customer <span class="highlight">Reviews</span></h1>
        </div>
    </div>
</section>

<section id="reviews">
    <div class="container">
        <div class="flex-row reviews-row">
            @foreach($reviews as $review)
                <div class="review--box">
                    @if($review['review_type'] == 'text')
                    <div class="review--title">
                        <h2>{{ $review['title'] }}</h2>
                    </div>
                    <div class="review--desc">
                        <p>{{ $review['review'] }}</p>
                    </div>
                    @elseif($review['review_type'] == 'video')
                    <div class="review--thumbnail">
                        <img src="{{ $review['review_thumbnail'] }}" alt="Test">
                    </div>
                    @endif
                    <div class="review--meta {{ $review['review_type'] == 'video' ? 'video-meta' : 'text-meta' }}">
                        @if($review['review_type'] == 'text')
                        <div class="review--author-img">
                            <img src="/review-authors/jack-brown.png" alt="{{ $review['author'] }}">
                        </div>
                        @elseif($review['review_type'] == 'video')
                        <div class="review--play" data-video-url="{{ $review['review_url'] }}">
                            <img src="/images/play-icon.svg" alt="Play Icon">
                        </div>
                        @endif
                        <div class="review--author">
                            <h3>{{ $review['author'] }}</h3>
                            <p>{{ $review['author_designation'] }}</p>
                            <ul>
                                @for($i = 0; $i < $review['rating']; $i++)
                                    <li>
                                        <img src="/images/star-rating.svg" alt="star">
                                    </li>
                                @endfor
                            </ul>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection