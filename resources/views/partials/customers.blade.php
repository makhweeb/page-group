<section id="our-client">
    <div class="container">
        <h1 class="title">
            @lang('Our clients')
        </h1>
        <div class="client-body">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach($customers as $customer)
                        <div class="carousel-item {{ $loop->index === 0 ? 'active' : '' }}">
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
                    @endforeach
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
            <a class="btn-hov-eff d-inline-block text-center" href="#">
                Оставьте заявку
                <span class="blue-btn btn1"></span>
                <span class="blue-btn btn2"></span>
                <span class="blue-btn btn3"></span>
                <span class="blue-btn btn4"></span>
            </a>
        </div>
    </div>
</section>
