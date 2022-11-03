<section id="leave-form">
    <div class="container">
        <div class="l-f-header">
            <img src="https://cleanfield.ru/art/wash1.png" alt="">
            <div class="l-f-title">
                <x-data-content-tools file="leave-form-title.html">
                    <h3>
                        Оставьте заявку на расчёт стоимости
                    </h3>
                    <p>
                        И наш менеджер вам перезвонит
                    </p>
                </x-data-content-tools>
            </div>
            <img src="https://cleanfield.ru/art/wash2.png" alt="">
        </div>
        <div class="l-f-body">
            <form method="post" action="{{ route('form') }}" novalidate="novalidate">
                @csrf
                <input type="hidden" name="type" value="general_request">
                <div class="input-group">
                    <div class="l-f-input-container ">
                        <input type="text" name="name" class="l-f-input required-input" required>
                        <div class="l-f-label">
                            @lang('Name')
                            <span>*</span>
                        </div>
                        <p class="required-message">
                            ❕ @lang('This field is required')
                        </p>
                    </div>
                    <div class="l-f-input-container required">
                        <input type="number" name="phone" class="l-f-input required-input" required>
                        <div class="l-f-label">
                            @lang('Phone number')
                            <span>*</span>
                        </div>
                        <p class="required-message">
                            ❕ @lang('This field is required')
                        </p>
                    </div>
                    <div class="btn-container">
                        <button type="submit" class="btn-green">
                            @lang('Send')
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>