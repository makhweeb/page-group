@extends('layout.app')

@include('partials.meta', [
    'title' => $siteSettings->site_name,
    'description' => $siteSettings->getTranslated('site_description'),
    'image' => asset($siteSettings->og_image)
])

@section('content')
    @include('partials.showcase')
    @include('partials.leave-form')
    @include('partials.service')
    @include('partials.personal-offer')
    @include('partials.about')
    @include('partials.customers')
    @include('partials.price-list')
    @include('partials.reviews')
    @include('partials.leave-form')
    @include('partials.faq')
    @include('partials.recommendations')
    @include('partials.posts')
    @include('partials.info')
    @include('partials.contacts')
    @include('partials.leave-form')

    <div class="modal-calling-con">
        <div class="modal-calling">
            <button class="close-calling">+</button>
            <x-data-content-tools file="modal-call-form.html">
                <h4>
                    Хотите перезвоним вам за 40 секунд
                </h4>
                <p>Ты можете выбрать подразделение из которого вам перезвонит контекст</p>
            </x-data-content-tools>
            <form method="POST" action="{{ route('form') }}" class="inputs">
                @csrf
                <input type="hidden" name="type" value="call_request">
                <input type="text" name="phone" placeholder="+998 XX XXX XX XX">
                <button class="btn-call">@lang('Submit')</button>
            </form>
        </div>
    </div>
    <div class="drop-close"></div>
@endsection