@extends('layout.app')

@section('content')
    <section id="stati">
        <h1 class="gray-title">
            @lang('Posts')
        </h1>
        <div class="container">
            <div class="stati-cards">
                @foreach($posts as $post)
                    <a href="{{ route('posts.show', $post->id) }}" class="stati-card">
                        <img src="{{ asset($post->image) }}" alt="">
                        <h2>{{ $post->title }}</h2>
                        <p>{{ $post->excerpt }}</p>
                    </a>
                @endforeach
            </div>
            {{ $posts->links() }}
        </div>
    </section>
@endsection