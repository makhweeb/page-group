<section id="kontakt">
    <h1 class="title">
        @lang('Contacts')
    </h1>
    <x-data-content-tools file="contacts-title.html">
        <p class="text">Мы на связи, по будням с 9:00 до 18:00</p>
    </x-data-content-tools>

    <div class="container">
        <div class="k-cards">
            <div class="k-card">
                <img src="https://cleanfield.ru/art/pic_phone.png" alt="">
                <p>@lang('validation.attributes.phone')</p>

                <a href="tel: {{ $siteSettings->phone }}">
                    {{ $siteSettings->phone }}
                </a>
            </div>
            <div class="k-card">
                <img src="https://cleanfield.ru/art/pic_mail.png" alt="">
                <p>@lang('validation.attributes.email')</p>

                <a href="mailto: {{ $siteSettings->email }}">
                    {{ $siteSettings->email }}
                </a>
            </div>
            <div class="k-card">
                <img src="https://cleanfield.ru/art/pic_pin.png" alt="">
                <p>@lang('validation.attributes.address')</p>

                <a class="k-black" href="#">
                    {{ $siteSettings->getTranslated('address') }}
                </a>
            </div>
        </div>
    </div>
</section>