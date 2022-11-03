<section id="biotexnologiya">
    <x-data-content-tools file="info-title.html">
        <h1 class="title">
            Биотехнологии, знания<br>
            и опыт в клининге
        </h1>
    </x-data-content-tools>

    <div class="container">
        <div class="b-clean-container">
            <div class="b-clean-left">
                <x-data-content-tools file="info-img.html">
                    <img src="https://cleanfield.ru/art/photo_woman.jpg" alt="">
                </x-data-content-tools>
                <x-data-content-tools file="info-text.html">
                    <p style="z-index: 2">
                        В нашей клининговой компании можно заказать<br>

                        уборку в Санкт-Петербурге и ЛО единоразово или на<br>

                        регулярной основе. Работаем по официальному договору.
                    </p>
                </x-data-content-tools>
            </div>
            <div class="b-clean-right">
                <x-data-content-tools file="info-content.html">
                    <h4>
                        Компания «КлинФилд» — это сертифицированное клининговое агентство с большим штатом обученных
                        сотрудников и отличной материальной базой
                    </h4>
                    <p>Мы убираем жилые и коммерческие объекты, беремся за работу любой сложности. Наши услуги включают
                        поддерживающую и генеральную уборку, клининг после строительства и ремонта, после чрезвычайных
                        происшествий квартир, дезинфекцию, химчистку. Мы уверены в качестве своих услуг, поэтому
                        предоставляем гарантию на клининг.</p>
                    <h4>Современные биотехнологии в клининге</h4>
                    <p>
                        Наша профессиональная компания осуществляет деятельность и использует современные технологии в
                        сфере
                        клининга: уборка проводится специализированным оборудованием и самыми эффективными чистящими
                        средствами. «КлинФилд» первой в Санкт-Петербурге стала использовать моющие средства,
                        разработанные
                        английскими учеными на основе биотехнологий. Агрессивные чистящие компоненты в таких составах
                        заменены полезными бактериями. Биосредства, которыми пользуется наша служба клининга, более
                        эффективны и экологически безопасны. Они гипоаллергенные и не оставляют на поверхностях
                        неприятных
                        запахов. </p>
                </x-data-content-tools>
            </div>
        </div>

        <div class="pluses_block">
            <x-data-content-tools file="features-title.html">
                <h4>Наше клининговое агентство<br>имеет несколько плюсов</h4>
            </x-data-content-tools>

            <div class="pluses_list">
                @for($i = 1; $i <= 5; $i++)
                    <div class="pluses_item">
                        <div class="plus">
                            <div class="plus-vertical"></div>
                            <div class="plus-gorizantal"></div>
                        </div>
                        <x-data-content-tools class="plus-description" file="features-{{ $i }}.html">
                            <p>
                                Регулярно проводим опросы клиентов, чтобы улучшить наш сервис.
                            </p>
                        </x-data-content-tools>
                    </div>
                @endfor
            </div>
        </div>
    </div>
</section>
