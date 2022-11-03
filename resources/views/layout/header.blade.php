{{-- Header --}}
<header class="bg-white">
    <div class="container header-container">
        <div class="header-top ">
            <div class="logo">
                <a href="/">
                    <img src="{{ asset('img/logo.jpg') }}" alt="logo">
                </a>
            </div>
            <div class="location d-flex">
                <p class="p-0 m-0">
                    <i class="fas fa-map-marker-alt pe-2"></i>
                    <x-data-content-tools file="header-information-1.html">
                        <span data-ce-tag="p">Санкт-Петербург, ул. Профессора Попова, д.8</span>
                    </x-data-content-tools>
                </p>
            </div>

            <div class="contact">
                <div class="d-flex">
                    <x-data-content-tools file="header-information-2.html">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-phone d-none d-sm-block" aria-hidden="true"></i>

                            <a data-ce-tag="p" href="tel:+998900077611">
                                8 (90) 007 76 11
                            </a>
                        </div>

                        <a data-ce-tag="p" href="tel:+998900077611" class="phone-icon">
                            <i class="fas fa-phone-alt"></i>
                        </a>
                    </x-data-content-tools>
                </div>

                <a class="btn btn-link" href="/set">
                     O'zbek tili 🇺🇿
                </a>

                <a class="btn button" data-bs-toggle="modal" data-bs-target="#exampleModalToggle" role="button">
                    Заказать звонок
                </a>
            </div>
            <div class="drop-menu">
                <button class="navbar-toggler dropDown" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <i class="fas fa-bars x-menu "></i>
                </button>
            </div>
        </div>
        <div class="header-bottom">
            <nav>
                <ul class=" dropMenu d-flex m-0 p-0 flex-wrap justify-content-between py-3">
                    <li><a href="#why_cleanfield">@lang('About us')</a></li>
                    <li><a href="#n-usluga">@lang('Services')</a></li>
                    <li><a href="#price">@lang('Prices')</a></li>
                    <li><a href="#">@lang('Our works')</a></li>
                    <li><a href="#reviews">@lang('Reviews')</a></li>
                    <li><a href="#kontakt">@lang('Contacts')</a></li>
                    <li><a href="{{ route('posts.index') }}">@lang('Articles')</a></li>
                    <li><a href="#question">@lang('FAQ')</a></li>
                </ul>
            </nav>

        </div>
    </div>
</header>

{{-- Mobile Nav --}}
<nav class="navbar navbar-nav-container navbar-expand-lg">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <ul class="mini-nav">
                    <li><a href="#why_cleanfield">@lang('About us')</a></li>
                    <li><a href="#n-usluga">@lang('Services')</a></li>
                    <li><a href="#price">@lang('Prices')</a></li>
                    <li><a href="#">@lang('Our works')</a></li>
                    <li><a href="#reviews">@lang('Reviews')</a></li>
                    <li><a href="#kontakt">@lang('Contacts')</a></li>
                    <li><a href="{{ route('posts.index') }}">@lang('Articles')</a></li>
                    <li><a href="#question">@lang('FAQ')</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>

{{-- Modal --}}
<div class="header-modal">
    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
         tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <span class="close-bg">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </span>
                <div class="modal-body">
                    <form action="">
                        <input type="text" class="input-text" placeholder="@lang('Your name')">
                        <input type="number" class="input-text" placeholder="@lang('Your phone')"> <br>
                        <input type="checkbox" class="checkbox-input" name="#" id="checked">
                        <label>
                            <x-data-content-tools file="header-modal-checkbox.html">
                                <div data-ce-tag="p">
                                    Нажимая
                                    кнопку «Жду звонка», я даю свое согласие на обработку моих
                                    персональных данных, в соответствии с Федеральным законом от 27.07.2006 года №152-ФЗ
                                    «О
                                    персональных данных», на условиях и для целей,
                                    определенных в Согласии на обработку персональных данных
                                </div>
                            </x-data-content-tools>
                        </label>
                        <button class="btn">@lang('Submit')</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>