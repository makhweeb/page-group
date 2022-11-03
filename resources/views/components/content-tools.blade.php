<div {{ $attributes }} data-editable data-file="{{ $file }}">
    {!! $content ?? $slot !!}
</div>