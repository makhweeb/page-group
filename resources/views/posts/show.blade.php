@extends('layout.app')

@section('content')
    <section id="pravila-uborka">
        <h1 class="gray-title">
            {{ $post->title }}
        </h1>
        <div class="container">
            <div class="pravila-cards">
                <div class="pravila-card">
                    <img src="{{ asset($post->image) }}" alt="">
                    <div>
                        {!! $post->content !!}
                    </div>
                    <a href="{{ route('posts.index') }}" class="a-hover">
                        @lang('Back to posts')
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection