@extends('layout.app')

@include('partials.meta', [
    'title' => $post->title . ' - ' .  $siteSettings->site_name,
    'description' => $post->excerpt,
    'image' => storage_url($post->image)
])

@section('content')
    <section id="pravila-uborka">
        <h1 class="gray-title">
            {{ $post->title }}
        </h1>
        <div class="container">
            <div class="pravila-cards">
                <div class="pravila-card">
                    <img src="{{ storage_url($post->image) }}" alt="">
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