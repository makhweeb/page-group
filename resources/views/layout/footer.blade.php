<footer>
    <div class="container-fluid">
        <div class="row container">
            <div class="col-lg-1"></div>
            <div class="col-lg-10 col-md-12 col-sm-12 col-12">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="white-title">
                            @lang('Contact information')
                        </div>
                        <div class="contact-info">
                            <div class="contact-info-phones">
                                <p class="d-flex">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <x-data-content-tools file="contact-information-1.html">
                                        <a data-ce-tag="p" href="tel:+78122425031"><span
                                                    class="new-phone">8 (812) 747-81-43</span></a>
                                    </x-data-content-tools>
                                </p>
                            </div>
                            <div class="contact-info-map">
                                <p>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <x-data-content-tools file="contact-information-2.html">
                                        <span data-ce-tag="p">Санкт - Петербург, ул. Профессора Попова, д.8</span>
                                    </x-data-content-tools>
                                </p>
                            </div>
                            <div class="contact-info-mail selectMust">
                                <p class="selectMust d-flex">
                                    <i class="far fa-envelope"></i>
                                    <x-data-content-tools file="contact-information-3.html">
                                        <a data-ce-tag="p" href="mailto:info9@cleanfield.ru"
                                           class="selectMust">info9@pagegroup.ru</a>
                                    </x-data-content-tools>
                                </p>
                            </div>
                            <div class="contact-info-time">
                                <p>
                                    <i class="far fa-clock"></i>
                                    <x-data-content-tools file="contact-information-4.html">
                                        <span data-ce-tag="p">Ежедневно: с 8-00 до 22-00</span>
                                    </x-data-content-tools>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="white-title">
                            @lang('Useful sections')
                        </div>
                        <div class="footer-services">
                            <ul>
                                <li><a href="#why_cleanfield">@lang('About us')</a></li>
                                <li><a href="#reviews">@lang('Reviews')</a></li>
                                <li><a href="#kontakt">@lang('Contacts')</a></li>
                                <li><a href="#question">@lang('Questions')</a></li>
                                <li><a href="{{ route('posts.index') }}">@lang('News')</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="white-title">@lang('We are in the social networks:')</div>
                        <div class="social-icons">
                            <ul>
                                <li><a target="_blank"
                                       href="https://www.youtube.com/channel/UCwpj9bnR26XgRNxMROCL7eg?view_as=subscriber"
                                       rel="nofollow"><img width="20px" src="{{ asset('img/youtube.png') }}" alt="">
                                        Youtube</a>
                                </li>

                                <li><a target="_blank" href="https://vk.com/public171817049" rel="nofollow"><img
                                                width="20px" src="{{ asset('img/vkontakte.png') }}" alt=""> VK</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>