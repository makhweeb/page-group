<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>{{ config('app.name') }}</title>

    @googlefonts

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>

@include('layout.header')
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
@include('partials.info')
@include('partials.contacts')
@include('partials.leave-form')
@include('layout.footer')

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

<a href="#" class="fixid">
</a>
</body>
</html>