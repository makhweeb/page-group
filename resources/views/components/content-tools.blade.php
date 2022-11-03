<div {{ $attributes }} @auth data-editable @endauth data-file="{{ $file }}">
    {!! $content ?? $slot !!}
</div>