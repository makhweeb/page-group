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

<header class="bg-white">
    <div class="container header-container">
        <div class="header-top ">
            <div class="logo">
                <a href="/">
                    <img src="./assets/imgs/logo.jpg" alt="logo">
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
            <div class="contact  ">
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
<div class="drop-close"></div>


<section id='showcase'>

    <div class="container show-container">
        <div class="show-left">
            <div class="bg-img-blur"></div>
            <h1>
                Клининговая компания <br>
                <span class="blue">Page Group</span>
            </h1>
            <p>
                Ежедневно убираем
                <strong>
                    более 20000 М2 коммерческой недвижимости
                </strong>
                <br> в Санкт-Петербурге и Лен. области
            </p>
            <a class="btn-hov-eff" href="#">
                Оставьте заявку
                <span class="blue-btn btn1"></span>
                <span class="blue-btn btn2"></span>
                <span class="blue-btn btn3"></span>
                <span class="blue-btn btn4"></span>
            </a>
        </div>

        <div class="show-right  ">
            <img src="./assets/imgs/show-img.png" alt="showcase image">
        </div>
    </div>

</section>

<section id='second'>

    <div class="container">
        <div class="tc-item-wrapper">

            <div class="tc-item">
                <div class="tc-icon">
                    <img src="./assets/png/untitled.png" alt="">
                </div>
                <p class="tc-text">
                    Отдел качества, следит за качеством работ на каждом объекте
                </p>
            </div>
            <div class="tc-item">
                <div class="tc-icon">
                    <img src="./assets/png/untitled (1).png" alt="">
                </div>
                <p class="tc-text">
                    Отдел качества, следит за на каждом объекте
                </p>
            </div>
            <div class="tc-item">
                <div class="tc-icon">
                    <img src="./assets/png/untitled (2).png" alt="">
                </div>
                <p class="tc-text">
                    Отдел качества, следит за объекте
                </p>
            </div>
            <div class="tc-item">
                <div class="tc-icon">
                    <img src="./assets/png/untitled (3).png" alt="">
                </div>
                <p class="tc-text">
                    Отдел качества, следит за качеством работ на каждом объекте
                </p>
            </div>
            <div class="tc-item">
                <div class="tc-icon">
                    <img src="./assets/png/untitled (4).png" alt="">
                </div>
                <p class="tc-text">
                    Отдел качества, следит за качеством работ на каждом объекте
                </p>
            </div>
            <div class="tc-item">
                <div class="tc-icon">
                    <img src="./assets/png/untitled (5).png" alt="">
                </div>
                <p class="tc-text">
                    Отдел качества, следит за качеством работ на каждом объекте
                </p>
            </div>


        </div>


    </div>

</section>


<section id="leave-form">
    <div class="container">
        <div class="l-f-header">
            <img src="https://cleanfield.ru/art/wash1.png" alt="">
            <div class="l-f-title">
                <h3>
                    Оставьте заявку на расчёт стоимости
                </h3>
                <p>
                    И наш менеджер вам перезвонит
                </p>

            </div>
            <img src="https://cleanfield.ru/art/wash2.png" alt="">
        </div>
        <div class="l-f-body">
            <form method="post" novalidate="novalidate">

                <div class="input-group">
                    <div class="l-f-input-container ">
                        <input type="text" name="name" class="l-f-input required-input" required>
                        <div class="l-f-label">
                            Имя
                            <span>*</span>
                        </div>
                        <p class="required-message">
                            ❕ Поле обязательно для заполнения
                        </p>
                    </div>
                    <div class="l-f-input-container required">
                        <input type="number" name="number" class="l-f-input required-input" required>
                        <div class="l-f-label">
                            Телефон
                            <span>*</span>
                        </div>
                        <p class="required-message">
                            ❕ Поле обязательно для заполнения
                        </p>
                    </div>
                    <div class="btn-container">
                        <button type="submit" class="btn-green">
                            Отправить
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<section id="n-usluga">
    <div class="container">
        <h1 class="title">
            Наши услуги
        </h1>
        <div class="n-items">
            <div class="n-item">
                <img src="https://cleanfield.ru/upload/iblock/5db/r66tb22cg3gfx670po0uenyms8u9a3oa.jpg" alt="">

                <p>
                    Уборка коммерческой недвижимости
                </p>
                <a href="#podrobniBtn" role="button">
                    Подробнее
                    <span></span>
                </a>
            </div>

            <div class="n-item">
                <img src="https://cleanfield.ru/upload/iblock/5db/r66tb22cg3gfx670po0uenyms8u9a3oa.jpg" alt="">

                <p>
                    Уборка коммерческой недвижимости
                </p>
                <a href="#podrobniBtn" role="button">
                    Подробнее
                    <span></span>
                </a>
            </div>
            <div class="n-item">
                <img src="https://cleanfield.ru/upload/iblock/5db/r66tb22cg3gfx670po0uenyms8u9a3oa.jpg" alt="">

                <p>
                    Уборка коммерческой недвижимости
                </p>
                <a href="#podrobniBtn" role="button">
                    Подробнее
                    <span></span>
                </a>
            </div>
            <div class="n-item">
                <img src="https://cleanfield.ru/upload/iblock/5db/r66tb22cg3gfx670po0uenyms8u9a3oa.jpg" alt="">

                <p>
                    Уборка коммерческой недвижимости
                </p>
                <a href="#podrobniBtn" role="button">
                    Подробнее
                    <span></span>
                </a>
            </div>
            <div class="n-item">
                <img src="https://cleanfield.ru/upload/iblock/5db/r66tb22cg3gfx670po0uenyms8u9a3oa.jpg" alt="">

                <p>
                    Уборка коммерческой недвижимости
                </p>
                <a href="#podrobniBtn" role="button">
                    Подробнее
                    <span></span>
                </a>
            </div>
            <div class="n-item">
                <img src="https://cleanfield.ru/upload/iblock/5db/r66tb22cg3gfx670po0uenyms8u9a3oa.jpg" alt="">

                <p>
                    Уборка коммерческой недвижимости
                </p>
                <a href="#podrobniBtn" role="button">
                    Подробнее
                    <span></span>
                </a>
            </div>
        </div>
        <div class="nashi-usluga-modal">
            <div class="modal fade" id="podrobniBtn" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
                 tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
        <span class="close-bg">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </span>

                        <div class="modal-body">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi repellat vitae quod quidem
                            praesentium perspiciatis in inventore placeat esse sequi dignissimos maxime doloribus
                            obcaecati doloremque commodi, laboriosam repellendus debitis reiciendis error dolorum? Rerum
                            non minus at officia soluta earum fugiat corrupti magni eius cum debitis aut, a recusandae!
                            Est a aut quisquam ipsam veritatis tenetur. Ratione quas itaque quae quod totam
                            necessitatibus ab, repudiandae similique facilis nihil facere unde dignissimos cumque vero,
                            architecto officia culpa eveniet, minus sunt in ea sed dicta quaerat? Nihil, asperiores
                            molestias. Sint fuga dolorem commodi fugiat at doloribus, vero aliquid? Et praesentium enim
                            tenetur animi odio sint dignissimos harum esse labore eos, sequi maxime laboriosam
                            cupiditate ab sapiente veniam neque veritatis minima modi obcaecati hic!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="podgotovim">
    <div class="container">
        <div class="p-wrapper">
            <div class="left">
                <h2>
                    Подготовим персональное <br>предложение для вашей компании
                </h2>
                <a class="btn-hov-eff" href="#">
                    Оставьте заявку
                    <span class="blue-btn btn1"></span>
                    <span class="blue-btn btn2"></span>
                    <span class="blue-btn btn3"></span>
                    <span class="blue-btn btn4"></span>
                </a>

            </div>
            <div class="right">
                <img src="https://cleanfield.ru/art/pic_key.png" alt="">
            </div>
        </div>
    </div>
</section>

<section id="why_cleanfield">
    <h1 class="title">
        Почему выбирают
        <span class="blue">Page Group</span>
    </h1>

    <div class="container">
        <div class="why-grid">
            <div class="one why-card bg-blue ">
                <p><b>10 лет</b></p>
                <p>
                    Работаем в сфере <br>
                    клининга с 2012
                </p>
            </div>
            <div class="two why-card bg-blue">
                <p>Более</p>
                <p><b>100</b></p>
                <p>новых
                    <strong>счастливых клиентов</strong>
                    каждый месяц
                </p>
            </div>
            <div class="three why-card bg-green">
                <img src="https://cleanfield.ru/art/pic_paper.png" alt="image">
                <p><b>99%</b></p>
                <p>клиентов <strong>
                        продлеваютс нами договор
                    </strong> на следующий год </p>

            </div>
            <div class="four why-card  bg-blue">
                <img src="https://cleanfield.ru/art/pic_RUB.png" alt="image">

                <p>клиентов <strong>
                        продлеваютс нами договор
                    </strong> на следующий год </p>
            </div>
            <div class="five why-card bg-blue"><img src="https://cleanfield.ru/art/pic_hat.png" alt="image">
                <p>Собственный <strong>центр обучения
                    </strong> персонала </p></div>
            <div class="six why-card bg-green">
                <p>Более</p>
                <p><b>200000 <sup><small>M2</small></sup> </b></p>
                <p>Обслуживаем <br>ежедневно!</p>
                <img src="https://cleanfield.ru/art/pic_star.png" alt="rasm">
            </div>
        </div>
    </div>
</section>

<section id="our-client">
    <div class="container">
        <h1 class="title">Наши клиенты</h1>
        <div class="client-body">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="carousel-card">
                            <div class="carousel-img">
                                <img src="https://cleanfield.ru/upload/iblock/d38/ywwnj5fc1p2m2myrktd4z9s4g9x3e26v.jpg"
                                     alt="First slide">
                            </div>
                            <div class="carousel-desc">
                                <ul>
                                    <li>Мытье стеклянных и зеркальных поверхностей`</li>
                                    <li>Обеспыливание и мытье пола, стен и осветительного оборудования</li>
                                    <li>Химчистка мебели и ковровых покрытий</li>
                                    <li>Мойка и дезинфекция сан узлов</li>
                                    <li>Чистка и обезжиривание кухонного оборудования</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="carousel-card ">
                            <div class="carousel-img">
                                <img src="https://cleanfield.ru/upload/iblock/d38/ywwnj5fc1p2m2myrktd4z9s4g9x3e26v.jpg"
                                     alt="First slide">
                            </div>
                            <div class="carousel-desc">
                                <ul>
                                    <li>Мытье стеклянных и зеркальных поверхностей`</li>
                                    <li>Обеспыливание и мытье пола, стен и осветительного оборудования</li>
                                    <li>Химчистка мебели и ковровых покрытий</li>
                                    <li>Мойка и дезинфекция сан узлов</li>
                                    <li>Чистка и обезжиривание кухонного оборудования</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-card">
                            <div class="carousel-img">
                                <img src="https://cleanfield.ru/upload/iblock/782/ex041lzm8xdwsz5j1et8gtkuw7t0dgkv.jpg"
                                     alt="First slide">
                            </div>
                            <div class="carousel-desc">
                                <ul>
                                    <li>Мытье стеклянных и зеркальных поверхностей`</li>
                                    <li>Обеспыливание и мытье пола, стен и осветительного оборудования</li>
                                    <li>Химчистка мебели и ковровых покрытий</li>
                                    <li>Мойка и дезинфекция сан узлов</li>
                                    <li>Чистка и обезжиривание кухонного оборудования</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <button class="carousel-control-prev prev " type="button"
                        data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next next" type="button"
                        data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div style="text-align: center; margin: 50px auto;">
            <a class="btn-hov-eff d-inline-block text-center " href="#">
                Оставьте заявку
                <span class="blue-btn btn1"></span>
                <span class="blue-btn btn2"></span>
                <span class="blue-btn btn3"></span>
                <span class="blue-btn btn4"></span>
            </a>
        </div>
    </div>
</section>

<section id="podgotovim">
    <div class="container">
        <div class="p-wrapper">
            <div class="left">
                <h2>
                    Подготовим персональное <br>предложение для вашей компании
                </h2>
                <a class="btn-hov-eff" href="#">
                    Оставьте заявку
                    <span class="blue-btn btn1"></span>
                    <span class="blue-btn btn2"></span>
                    <span class="blue-btn btn3"></span>
                    <span class="blue-btn btn4"></span>
                </a>

            </div>
            <div class="right">
                <img src="https://cleanfield.ru/art/pic_paper-big.png" alt="">
            </div>
        </div>
    </div>
</section>

<section id="price">
    <h1 class="title">Цены на клининг</h1>
    <div class="container">
        <div class="price-list">
            <div class="accordion  accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                            Ежедневная уборка
                            <span class="plus">
                      <div class="row"></div>
                      <div class="col"></div>
                    </span>
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                         data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li><span>Офисов</span><span>от 15150 руб./месяц</span></li>
                                <li><span>Складских помещений</span><span>от 30 руб./м <sup>2</sup> в месяц</span></li>
                                <li><span>Производств</span><span>от 30 руб./м <sup>2</sup> в месяц</span></li>
                                <li><span>Квартир</span><span>от 13000 руб.</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                            Уборка после ремонта
                            <span class="plus">
                      <div class="row"></div>
                      <div class="col"></div>
                    </span>
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                         data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li><span>Офисов</span><span>от 15150 руб./месяц</span></li>
                                <li><span>Складских помещений</span><span>от 30 руб./м <sup>2</sup> в месяц</span></li>
                                <li><span>Производств</span><span>от 30 руб./м <sup>2</sup> в месяц</span></li>
                                <li><span>Квартир</span><span>от 13000 руб.</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                            Мойка остекления и фасадов
                            <span class="plus">
                      <div class="row"></div>
                      <div class="col"></div>
                    </span>
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                         aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li><span>Офисов</span><span>от 15150 руб./месяц</span></li>
                                <li><span>Складских помещений</span><span>от 30 руб./м <sup>2</sup> в месяц</span></li>
                                <li><span>Производств</span><span>от 30 руб./м <sup>2</sup> в месяц</span></li>
                                <li><span>Квартир</span><span>от 13000 руб.</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="reviews">
    <h1 class="title">Отзывы</h1>
    <p class="text">Мнения клиентов о работе нашей компании</p>
    <div class="container">
        <div class="r-cards">
            <div class="r-column">
                <div class="r-card">
                    <p class="r-card-title">
                        Екатерина любимова
                    </p>
                    <p class="r-card-desc">
                        Благодарю за качественно выполненную уборку трех наших цехов. Это была непроста задача, но ваши
                        сотрудники справились.Получилось отлично, своими силами мы бы не добились такой чистоты. Будем
                        еще не единожды обращаться в компанию Page Group.
                    </p>
                </div>

                <div class="r-card">
                    <p class="r-card-title blue">
                        Алла непорест
                    </p>
                    <p class="r-card-desc">
                        Здравствуйте! Не могла не написать пару добрых слов в адрес вашей компании.Очень понравилось
                        качество уборки офиса, никаких замечаний не имеем, будем обращаться еще, большое спасибо!
                    </p>
                </div>


                <div class="r-card">
                    <p class="r-card-title ">
                        МАРИЯ
                    </p>
                    <p class="r-card-desc">
                        Добрый день. Хотим поблагодарить ребят из Клинфилда в особенности Константина за честно
                        отработанную генеральную уборку в нашем офисе.
                    </p>
                </div>

            </div>
            <div class="r-column">

                <div class="r-card">
                    <p class="r-card-title blue">
                        Ольга П.
                    </p>
                    <p class="r-card-desc ">
                        Объявляем благодарность Клинфилд за уборку загородного дома в это воскресение! Да-да и в
                        выходные можно пригласить работников из этой компании. Мы остались довольны чистыми стенами,
                        потолками и полами! Все сделано на пять с плюсом!
                    </p>
                </div>

                <div class="r-card">
                    <p class="r-card-title green">
                        Валентина
                    </p>
                    <p class="r-card-desc">
                        Регулярно заказываю у вас уборку офиса. До этого сменила несколько компаний, не была довольна.
                        Ваши сотрудницы аккуратны, вежливы, профессиональны и пунктуальны. Работают на совесть, а не на
                        отвали. После вашей уборки долго сохраняется чистота, а это показатель качества. Только
                        клининговая компания Page Group теперь. Спасибо, что вы есть)
                    </p>
                </div>

                <div class="r-card">
                    <p class="r-card-title blue">
                        Иванченко
                    </p>
                    <p class="r-card-desc">
                        Здравствуйте мои дорогие! От всего нашего небольшого коллектива огромное спасибо вам за помощь в
                        уборке офиса!
                    </p>
                </div>

            </div>
            <div class="r-column">

                <div class="r-card">
                    <p class="r-card-title green">
                        Марина боброва
                    </p>
                    <p class="r-card-desc">
                        Заказывали уборку коттеджа после юбилея мужа. Приехали вовремя, убрали качественно. Видно было,
                        что работаете на совесть и внимательно относитесь к клиентам! Спасибо, page group
                    </p>
                </div>


                <div class="r-card">
                    <p class="r-card-title">
                        Администрация складского комплекста
                    </p>
                    <p class="r-card-desc">
                        Спасибо большое Константину и его ребятам за добросовестно помытые окна на нашем складе! Стало
                        светлее в помещении и на душе!
                    </p>
                </div>


                <div class="r-card">
                    <p class="r-card-title green">
                        Екатерина
                    </p>
                    <p class="r-card-desc">
                        Благодарим за уборку ресторана компанию page group. Помещение реально как после ремонта, хотя
                        ничего не изменилось, просто помыли-почистили и навели порядок. Сотрудницы молодцы, хорошо знают
                        свою работу. Теперь посетителям будет еще приятнее к нам приходить, а вас мы будем
                        рекомендовать.
                    </p>
                </div>
            </div>

        </div>
        <a class="btn-hov-eff d-block m-auto mt-5 text-center" href="">
            Все отзывы
            <span class="blue-btn btn1"></span>
            <span class="blue-btn btn2"></span>
            <span class="blue-btn btn3"></span>
            <span class="blue-btn btn4"></span>
        </a>
    </div>
</section>


<section id="leave-form">
    <div class="container">
        <div class="l-f-header">
            <img src="https://cleanfield.ru/art/wash1.png" alt="">
            <div class="l-f-title">
                <h3>
                    Оставьте заявку на расчёт стоимости
                </h3>
                <p>
                    И наш менеджер вам перезвонит
                </p>

            </div>
            <img src="https://cleanfield.ru/art/wash2.png" alt="">
        </div>
        <div class="l-f-body">
            <form method="post" novalidate="novalidate">

                <div class="input-group">
                    <div class="l-f-input-container ">
                        <input type="text" name="name" class="l-f-input required-input" required>
                        <div class="l-f-label">
                            Имя
                            <span>*</span>
                        </div>
                        <p class="required-message">
                            ❕ Поле обязательно для заполнения
                        </p>
                    </div>
                    <div class="l-f-input-container required">
                        <input type="number" name="number" class="l-f-input required-input" required>
                        <div class="l-f-label">
                            Телефон
                            <span>*</span>
                        </div>
                        <p class="required-message">
                            ❕ Поле обязательно для заполнения
                        </p>
                    </div>
                    <div class="btn-container">
                        <button type="submit" class="btn-green">
                            Отправить
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<section id="question">

    <h1 class="title">
        Вопросы и ответы
    </h1>
    <p class="text">
        Мнения клиентов о работе нашей компании
    </p>
    <div class="container">
        <div class="accordion  accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Ежедневная уборка
                        <span class="plus">
                      <div class="row"></div>
                      <div class="col"></div>
                    </span>
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                     data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate
                        the <code>.accordion-flush</code> class. This is the first item's accordion body.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Уборка после ремонта
                        <span class="plus">
                      <div class="row"></div>
                      <div class="col"></div>
                    </span>
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                     data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate
                        the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine
                        this being filled with some actual content.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                            aria-controls="flush-collapseThree">
                        Мойка остекления и фасадов
                        <span class="plus">
                      <div class="row"></div>
                      <div class="col"></div>
                    </span>
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                     data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate
                        the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more
                        exciting happening here in terms of content, but just filling up the space to make it look, at
                        least at first glance, a bit more representative of how this would look in a real-world
                        application.
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section id="podgotovim" class="Не знаете с чего начать? ">
    <div class="container">
        <div class="p-wrapper">
            <div class="left">
                <h2>
                    Не знаете с чего начать? <br>Оставьте заявку и мы расскажем!
                </h2>
                <a class="btn-hov-eff" href="#">
                    Оставьте заявку
                    <span class="blue-btn btn1"></span>
                    <span class="blue-btn btn2"></span>
                    <span class="blue-btn btn3"></span>
                    <span class="blue-btn btn4"></span>
                </a>

            </div>
            <div class="right">
                <img src="https://cleanfield.ru/art/pic_question.png" alt="">
            </div>
        </div>
    </div>
</section>
<section id="news">
    <h1 class="title">
        Новости и события
    </h1>
    <p class="text">
        Новости и события клининговой компании CleanField
    </p>
    <div class="container">
        <div class="news-cards">
            <div class="news-card">
                <img src="https://cleanfield.ru/art/photo_news-1.jpg" alt="">
                <h3>Секреты мытья окон без разводов</h3>

                <p> Говорят, что самый лучший телевизор с максимально реалистичным изображением – это хорошо вымытые
                    окна. Пожалуй, это как раз тот случай, когда в шутке лишь доля шутки. </p>
                <a href="./pages/news.html" role="button">
                    Читать новость
                    <span></span>
                </a>
            </div>
            <div class="news-card">
                <img src="https://cleanfield.ru/art/photo_news-1.jpg" alt="">
                <h3>Секреты мытья окон без разводов</h3>

                <p> Говорят, что самый лучший телевизор с максимально реалистичным изображением – это хорошо вымытые
                    окна. Пожалуй, это как раз тот случай, когда в шутке лишь доля шутки. </p>
                <a href="./pages/news.html" role="button">
                    Читать новость
                    <span></span>
                </a>
            </div>
        </div>
        <a class="btn-hov-eff" href="./stati.html">
            Все новости
            <span class="blue-btn btn1"></span>
            <span class="blue-btn btn2"></span>
            <span class="blue-btn btn3"></span>
            <span class="blue-btn btn4"></span>
        </a>
    </div>


</section>


<section id="biotexnologiya">
    <h1 class="title">
        Биотехнологии, знания<br>
        и опыт в клининге
    </h1>
    <div class="container">

        <div class="b-clean-container">
            <div class="b-clean-left">
                <img src="https://cleanfield.ru/art/photo_woman.jpg" alt="">
                <p class="">
                    В нашей клининговой компании можно заказать<br>

                    уборку в Санкт-Петербурге и ЛО единоразово или на<br>

                    регулярной основе. Работаем по официальному договору.
                </p>
            </div>
            <div class="b-clean-right">
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
                    Наша профессиональная компания осуществляет деятельность и использует современные технологии в сфере
                    клининга: уборка проводится специализированным оборудованием и самыми эффективными чистящими
                    средствами. «КлинФилд» первой в Санкт-Петербурге стала использовать моющие средства, разработанные
                    английскими учеными на основе биотехнологий. Агрессивные чистящие компоненты в таких составах
                    заменены полезными бактериями. Биосредства, которыми пользуется наша служба клининга, более
                    эффективны и экологически безопасны. Они гипоаллергенные и не оставляют на поверхностях неприятных
                    запахов. </p>
            </div>
        </div>

        <div class="pluses_block">
            <h4>Наше клининговое агентство<br>имеет несколько плюсов</h4>
            <div class="pluses_list">

                <div class="pluses_item">
                    <div class="plus">
                        <div class="plus-vertical"></div>
                        <div class="plus-gorizantal"></div>
                    </div>
                    <p class="plus-description">Регулярно проводим опросы клиентов, чтобы улучшить наш сервис.</p>
                </div>
                <div class="pluses_item">
                    <div class="plus">
                        <div class="plus-vertical"></div>
                        <div class="plus-gorizantal"></div>
                    </div>
                    <p class="plus-description">Регулярно проводим опросы клиентов, чтобы улучшить наш сервис.</p>
                </div>
                <div class="pluses_item">
                    <div class="plus">
                        <div class="plus-vertical"></div>
                        <div class="plus-gorizantal"></div>
                    </div>
                    <p class="plus-description">Регулярно проводим опросы клиентов, чтобы улучшить наш сервис.</p>
                </div>
                <div class="pluses_item">
                    <div class="plus">
                        <div class="plus-vertical"></div>
                        <div class="plus-gorizantal"></div>
                    </div>
                    <p class="plus-description">Используем качественные моющие средства европейского и американского
                        производства.и американского производства.и американского производства.</p>
                </div>
                <div class="pluses_item">
                    <div class="plus">
                        <div class="plus-vertical"></div>
                        <div class="plus-gorizantal"></div>
                    </div>
                    <p class="plus-description">Регулярно проводим опросы клиентов, чтобы улучшить наш сервис.</p>
                </div>
            </div>
        </div>
    </div>

</section>


<section id="kontakt">

    <h1 class="title">
        Контакты
    </h1>
    <p class="text">Мы на связи, по будням с 9:00 до 18:00</p>
    <div class="container">
        <div class="k-cards">
            <div class="k-card">
                <img src="https://cleanfield.ru/art/pic_phone.png" alt="">
                <p>звоните</p>
                <a href="tel: +998900077611">8 (812) 426-73-40</a>
            </div>
            <div class="k-card">
                <img src="https://cleanfield.ru/art/pic_mail.png" alt="">
                <p>звоните</p>
                <a href="mailto:info8@cleanfield.ru" class="selectMust">info9@PageGroup.ru</a>
            </div>
            <div class="k-card">
                <img src="https://cleanfield.ru/art/pic_pin.png" alt="">
                <p>звоните</p>
                <a href="#" class="k-black">г. Санкт-Петербург, <br> ул. Профессора поповова, д. 8</a>
            </div>
        </div>
    </div>
</section>

<section id="leave-form">
    <div class="container">
        <div class="l-f-header">
            <img src="https://cleanfield.ru/art/wash1.png" alt="">
            <div class="l-f-title">
                <h3>
                    Оставьте заявку на расчёт стоимости
                </h3>
                <p>
                    И наш менеджер вам перезвонит
                </p>

            </div>
            <img src="https://cleanfield.ru/art/wash2.png" alt="">
        </div>
        <div class="l-f-body">
            <form method="post" novalidate="novalidate">

                <div class="input-group">
                    <div class="l-f-input-container ">
                        <input type="text" name="name" class="l-f-input required-input" required>
                        <div class="l-f-label">
                            Имя
                            <span>*</span>
                        </div>
                        <p class="required-message">
                            ❕ Поле обязательно для заполнения
                        </p>
                    </div>
                    <div class="l-f-input-container required">
                        <input type="number" name="number" class="l-f-input required-input" required>
                        <div class="l-f-label">
                            Телефон
                            <span>*</span>
                        </div>
                        <p class="required-message">
                            ❕ Поле обязательно для заполнения
                        </p>
                    </div>
                    <div class="btn-container">
                        <button type="submit" class="btn-green">
                            Отправить
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>


<footer>
    <div class="container-fluid">
        <div class="row container">
            <div class="col-lg-1"></div>
            <div class="col-lg-10 col-md-12 col-sm-12 col-12">
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                        <div class="white-title">Контактная информация</div>
                        <div class="contact-info">
                            <div class="contact-info-phones">
                                <p><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+78122425031"><span
                                                class="new-phone">8 (812) 747-81-43</span></a></p></div>
                            <div class="contact-info-map">
                                <p><i class="fas fa-map-marker-alt"></i>Санкт - Петербург, ул. Профессора Попова, д.8
                                </p></div>
                            <div class="contact-info-mail selectMust">
                                <p class="selectMust">
                                    <i class="far fa-envelope"></i><a href="mailto:info9@cleanfield.ru"
                                                                      class="selectMust">info9@pagegroup.ru</a>
                                </p></div>
                            <div class="contact-info-time">
                                <i class="far fa-clock"></i>
                                <p>
                                    Ежедневно: <br>
                                    с 8-00 до 22-00
                                </p></div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                        <div class="white-title">Полезные разделы</div>
                        <div class="footer-services">
                            <ul>
                                <li><a href="#why_cleanfield">О нас</a></li>
                                <li><a href="#reviews">Отзывы</a></li>
                                <li><a href="#kontakt">Контакты</a></li>
                                <li><a href="#question">Вопрос-ответ</a></li>
                                <li><a href="./stati.html">Статьи</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                        <div class="white-title">Мы в соц. сетях:</div>
                        <div class="social-icons">

                            <ul>

                                <li><a target="_blank"
                                       href="https://www.youtube.com/channel/UCwpj9bnR26XgRNxMROCL7eg?view_as=subscriber"
                                       rel="nofollow"><img width="20px" src="./assets/imgs/youtube.png" alt=""> Youtube</a>
                                </li>

                                <li><a target="_blank" href="https://vk.com/public171817049" rel="nofollow"><img
                                                width="20px" src="./assets/imgs/wkontakte.png" alt=""> VK</a></li>


                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="white-title">Наши услуги:</div>
                    <div class="footer-services">
                        <div id="bxdynamic_g8taYv_start" style="display:none"></div>
                        <ul>
                            <li><a href="/uslugi/uborka_kvartir_v_sankt_peterburge/">Уборка квартир</a></li>
                            <li><a href="/uslugi/uborka_ofisov/">Уборка офисов</a></li>
                            <li><a href="/uslugi/uborka_posle_remonta_stroitelstva/">Клининг после ремонта</a></li>
                            <li><a href="/uslugi/uborka_ofisov_posle_remonta/">Уборка офисов после ремонта</a></li>
                            <li><a href="/uslugi/generalnaya_uborka/">Генеральный клининг</a></li>
                            <li><a href="/uslugi/uborka_pomeshcheniy/">Уборка помещений</a></li>
                        </ul>

                        <div id="bxdynamic_g8taYv_end" style="display:none"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="white-title color-trans" style="
    color: #fff; opacity: 0; @media (max-width: 576px) {
      display: none;
    }
">Наши услуги:
                    </div>
                    <div class="footer-services">
                        <div id="bxdynamic_rIpOz9_start" style="display:none"></div>
                        <ul>
                            <li><a href="/uslugi/ezhednevnaya_uborka_/">Ежедневная уборка</a></li>
                            <li><a href="/uslugi/moyka_fasadov/">Мойка фасадов</a></li>
                            <li><a href="/uslugi/moyka_okon/">Мойка окон</a></li>
                            <li><a href="/uslugi/uborka_skladskikh_pomeshcheniy/">Уборка складов</a></li>
                            <li><a href="/uslugi/uborka_proizvodstvennykh_pomeshcheniy/">Уборка производств</a></li>
                        </ul>

                        <div id="bxdynamic_rIpOz9_end" style="display:none"></div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="col-12 hidden-md-down"></div>
                    <div class="col-12">
                        <div class="developer" style="justify-content: center;">

                            <p class="text-center">© 2018—2022 Page Group <br><a href="#">Карта сайта</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</footer>

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


<script src="./assets/js/index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>