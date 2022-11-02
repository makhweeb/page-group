@php
    $colors = ['', 'blue', 'green'];
@endphp

<section id="reviews">
    <h1 class="title">Отзывы</h1>
    <p class="text">Мнения клиентов о работе нашей компании</p>
    <div class="container">
        <div class="r-cards">
            @foreach($reviews as $review)
                <div class="r-card {{ $colors[array_rand($colors)] }}">
                    <p class="r-card-title">
                        {{ $review->name }}
                    </p>
                    <p class="r-card-desc">
                        {{ $review->content }}
                    </p>
                </div>
            @endforeach
        </div>
        <a class="btn-hov-eff d-block m-auto mt-5 text-center" href="">
            Все отзывы
            <span class="blue-btn btn1"></span>
            <span class="blue-btn btn2"></span>
            <span class="blue-btn btn3"></span>
            <span class="blue-btn btn4"></span>
        </a>
    </div>
</section>