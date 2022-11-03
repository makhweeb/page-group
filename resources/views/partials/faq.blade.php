<section id="question">
    <h1 class="title">
        @lang('Questions')
    </h1>
    <p class="text">
        @lang('Questions text')
    </p>
    <div class="container">
        <div class="accordion  accordion-flush" id="accordionFlushExample">
            @foreach($faqs as $faq)
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="{{ '#flush-collapseOne' . $faq->id }}">
                            {{ $faq->question }}
                            <span class="plus">
                      <div class="row"></div>
                      <div class="col"></div>
                    </span>
                        </button>
                    </h2>
                    <div id="{{ 'flush-collapseOne' . $faq->id }}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                         data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            {{ $faq->answer }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>