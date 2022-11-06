@php
    $colors = ['', 'blue', 'green'];
@endphp

<section id="reviews">
    <h1 class="title">
        @lang('Reviews')
    </h1>
    <x-data-content-tools file="reviews-desc.html">
        <p class="text">
            Reviews text
        </p>
    </x-data-content-tools>
    <div class="container">
        <div class="r-cards">
            @foreach($reviews as $review)
                <div class="r-card">
                    <p class="r-card-title {{ $colors[array_rand($colors)] }}">
                        {{ $review->name }}
                    </p>
                    <p class="r-card-desc">
                        {{ $review->content }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>