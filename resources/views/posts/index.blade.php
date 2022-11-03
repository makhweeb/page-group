@extends('layout.app')

@include('partials.meta', [
    'title' => __('Articles') . ' - ' .  $siteSettings->site_name,
    'description' => $siteSettings->getTranslated('site_description'),
    'image' => asset($siteSettings->og_image)
])

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