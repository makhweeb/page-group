<section id="news">
    <h1 class="title">
        @lang('Articles')
    </h1>
    <x-data-content-tools file="news.html">
        <p class="text">
            Новости и события клининговой компании CleanField
        </p>
    </x-data-content-tools>
    <div class="container">
        <div class="news-cards">
            @foreach($posts as $post)
                <div class="news-card">
                    <img src="{{ storage_url($post->image) }}" alt="">
                    <h3>{{ $post->title }}</h3>

                    <p>{{ $post->excerpt }}</p>
                    <a href="{{ route('posts.show', $post->id) }}" role="button">
                        @lang('Read more')
                        <span></span>
                    </a>
                </div>
            @endforeach
        </div>
        <a class="btn-hov-eff" href="{{ route('posts.index') }}">
            @lang('All news')
            <span class="blue-btn btn1"></span>
            <span class="blue-btn btn2"></span>
            <span class="blue-btn btn3"></span>
            <span class="blue-btn btn4"></span>
        </a>
    </div>
</section>