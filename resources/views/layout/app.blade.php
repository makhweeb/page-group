<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
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

@if(session('success'))
    <div class="toast show align-items-center text-white bg-success border-0 position-absolute" role="alert"
         style="z-index: 9999; top: 20px; right: 20px"
         aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                @lang('Your request has been sent successfully')
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                    aria-label="Close"></button>
        </div>
    </div>
@endif

@auth
    <script src="{{ asset('js/content-tools.min.js') }}"></script>
    <script src="{{ asset('js/editor.js') }}"></script>
@endauth
</body>
</html>