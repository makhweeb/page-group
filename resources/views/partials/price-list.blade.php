@php
    $content = $priceList->content;
@endphp

<section id="price">
    <h1 class="title">Цены на клининг</h1>
    <div class="container">
        <div class="price-list">
            <div class="accordion  accordion-flush" id="accordionFlushExample">
                @foreach($content as $item)
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                            {{ $item['name'] }}
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
                                @foreach($item['prices'] as $priceItem)
                                    <li>
                                        <span>{{ $priceItem['name'] }}</span>
                                        <span>{{ $priceItem['price'] }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>