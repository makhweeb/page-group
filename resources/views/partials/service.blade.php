<section id="n-usluga">
    <div class="container">
        <h1 class="title">
            @lang('Our services')
        </h1>
        <div class="n-items">
            @foreach($services as $service)
                <div class="n-item">
                    <img src="{{ asset($service->image) }}" alt="">

                    <p>{{ $service->name }}</p>
                    <a href="#" data-bs-toggle="modal" data-bs-target="{{ '#podrobniBtn' . $service->id }}" role="button">
                        Подробнее
                        <span></span>
                    </a>
                </div>

                <div class="nashi-usluga-modal">
                    <div class="modal fade" id="{{ 'podrobniBtn' . $service->id }}" aria-hidden="true"
                         tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <span class="close-bg">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </span>
                                <div class="modal-body">
                                    {{ $service->content }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>