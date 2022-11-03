<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @stack('meta')

    @googlefonts

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/content-tools.min.css') }}">
</head>
<body>

@include('layout.header')
@yield('content')
@include('layout.footer')

<a href="#" class="fixid"></a>

@auth
    <script src="{{ asset('js/content-tools.min.js') }}"></script>
    <script src="{{ asset('js/editor.js') }}"></script>
@endauth
</body>
</html>