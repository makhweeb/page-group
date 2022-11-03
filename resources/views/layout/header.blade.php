{{-- Header --}}
<header class="bg-white">
    <div class="container header-container">
        <div class="header-top ">
            <div class="logo">
                <a href="/">
                    <img src="{{ asset('img/logo.jpg') }}" alt="logo">
                </a>
            </div>
            <div class="location">
                <p class="p-0 m-0">
                    <i class="fas fa-map-marker-alt"></i>
                    Санкт-Петербург, ул. Профессора Попова, д.8
                </p>
            </div>

            <div class="email">
                <a href="mailto: gsattorov0102@mail.ru">gsattorov0102@mail.ru</a>
            </div>
            <div class="contact">
                <a href="tel:+998900077611">8 (90) 007 76 11</a>
                <a href="tel:+998900077611" class="phone-icon">
                    <i class="fas fa-phone-alt"></i>
                </a>

                <a class="btn button" href="#exampleModalToggle" role="button">
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
                    <li><a href="#why_cleanfield">О компании</a></li>
                    <li><a href="#n-usluga">Услуги</a></li>
                    <li><a href="#price">Цены</a></li>
                    <li><a href="#">Наши работы</a></li>
                    <li><a href="#">Акции</a></li>
                    <li><a href="#reviews">Отзывы</a></li>
                    <li><a href="#kontakt">Контакты</a></li>
                    <li><a href="./stati.html">Статьи</a></li>
                    <li><a href="#question">Вопросы-ответы</a></li>
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
                    <li><a href="#why_cleanfield">О компании</a></li>
                    <li><a href="#n-usluga">Услуги</a></li>
                    <li><a href="#price">Цены</a></li>
                    <li><a href="#">Наши работы</a></li>
                    <li><a href="#">Акции</a></li>
                    <li><a href="#reviews">Отзывы</a></li>
                    <li><a href="#kontakt">Контакты</a></li>
                    <li><a href="./stati.html">Статьи</a></li>
                    <li><a href="#question">Вопросы-ответы</a></li>
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
                        <input type="text" class="input-text" placeholder="Ваше имя ">
                        <input type="number" class="input-text" placeholder="Ваш телефон "> <br>
                        <input type="checkbox" class="checkbox-input" name="#" id="checked">
                        <label for="checked" data-bs-target="#exampleModalToggle2" data-bs-dismiss="modal">Нажимая
                            кнопку «Жду звонка», я даю свое согласие на обработку моих
                            персональных данных, в соответствии с Федеральным законом от 27.07.2006 года №152-ФЗ «О
                            персональных данных», на условиях и для целей,
                            определенных в Согласии на обработку персональных данных</label>
                        <button class="btn">Жду звонка</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
         tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
        <span class="close-bg">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </span>
                <div class="modal-body">
                    Hide this modal and show the first with the button below.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Et ex maxime unde voluptas illum alias,
                    dignissimos iure quos atque a. Quod veritatis, possimus laborum illo nisi labore voluptas minus
                    consequatur officia rem aspernatur unde iste voluptatem accusantium dolores recusandae deserunt sunt
                    optio corrupti doloribus ab temporibus dicta? Aliquid, cupiditate delectus reiciendis nostrum
                    quibusdam iure at amet nihil magni dignissimos earum esse? Inventore dolorum saepe quis recusandae,
                    praesentium laboriosam error ipsa, dolores quos beatae sed veniam, molestiae aperiam unde! Totam
                    quos nemo nisi deleniti cum, molestias ducimus necessitatibus doloribus ut qui fugit quod, eius
                    animi ipsum cupiditate labore voluptatum nihil laborum iure culpa deserunt dolor? Voluptates quaerat
                    repellendus soluta quidem dolorum atque maiores perferendis eveniet numquam laboriosam. Placeat,
                    quis? Iusto, repudiandae.
                </div>
                <button type="button" class=" btn-prinimayu" data-bs-dismiss="modal" aria-label="Close">Принимаю
                </button>
                <label for="checked" type="button" class="btn-prinimayu for-bg" data-bs-dismiss="modal"
                       aria-label="Close">Не принимаю</label>
            </div>
        </div>
    </div>
</div>