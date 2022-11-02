<section id="price">
    <h1 class="title">Цены на клининг</h1>
    <div class="container">
        <div class="price-list">
            <div class="accordion  accordion-flush" id="accordionFlushExample">
                @foreach($priceLists as $priceList)
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
                @endforeach
            </div>
        </div>
    </div>
</section>