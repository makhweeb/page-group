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
                <x-data-content-tools file="contacts-phone.html">
                    <p>звоните</p>
                    <a data-ce-tag="p" href="tel: +998900077611">8 (812) 426-73-40</a>
                </x-data-content-tools>
            </div>
            <div class="k-card">
                <img src="https://cleanfield.ru/art/pic_mail.png" alt="">
                <x-data-content-tools file="contacts-mail.html">
                    <p>звоните</p>
                    <a data-ce-tag="p" href="mailto:info8@cleanfield.ru" class="selectMust">info9@PageGroup.ru</a>
                </x-data-content-tools>
            </div>
            <div class="k-card">
                <img src="https://cleanfield.ru/art/pic_pin.png" alt="">
                <x-data-content-tools file="contacts-address.html">
                    <p>звоните</p>
                    <a data-ce-tag="p" href="#" class="k-black">г. Санкт-Петербург, <br> ул. Профессора поповова, д. 8</a>
                </x-data-content-tools>
            </div>
        </div>
    </div>
</section>