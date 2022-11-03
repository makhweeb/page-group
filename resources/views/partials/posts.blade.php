<section id="news">
    <h1 class="title">
        Новости и события
    </h1>
    <p class="text">
        Новости и события клининговой компании CleanField
    </p>
    <div class="container">
        <div class="news-cards">
            @foreach($posts as $post)
                <div class="news-card">
                    <img src="{{ asset($post->image) }}" alt="">
                    <h3>{{ $post->title }}</h3>

                    <p>{{ $post->excerpt }}</p>
                    <a href="./pages/news.html" role="button">
                        @lang('Read more')
                        <span></span>
                    </a>
                </div>
            @endforeach
        </div>
        <a class="btn-hov-eff" href="./stati.html">
            Все новости
            <span class="blue-btn btn1"></span>
            <span class="blue-btn btn2"></span>
            <span class="blue-btn btn3"></span>
            <span class="blue-btn btn4"></span>
        </a>
    </div>
</section>