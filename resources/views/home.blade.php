@extends('layout.app')

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
            <h4>
                Хотите перезвоним вам за 40 секунд
            </h4>
            <p>Ты можете выбрать подразделение из которого вам перезвонит контекст</p>
            <div class="inputs">
                <input type="text">
                <button class="btn-call">Жду звонка</button>
                <h4 class="h4-timer">00:39</h4>
            </div>
            <p>Свободных операторов на линии: 2</p>
            <p>В процессе разговора с клиентоми: 0</p>
            <p>Обслуживание вызовов за сегодня: 4</p>
        </div>
    </div>
    <div class="drop-close"></div>
@endsection