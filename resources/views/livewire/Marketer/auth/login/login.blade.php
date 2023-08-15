@if (!$show_send_code_form)
    <form wire:submit.prevent="registerSellerForm" class="needs-validation tab-pane fade show active"
          autocomplete="off" novalidate id="signin-tab">
        <div class="c-reg-form__row">
            <div class="c-reg-form__col c-reg-form__col--12 has-error">

                <div class="c-ui-input has-error">
                    <input wire:model.lazy="seller.mobile" class="c-ui-input__field c-ui-input__field--ltr c-ui-input__field--has-icon" type="text" id="si-email"
                           placeholder="لطفا شماره موبایل خود را وارد" required>
                    <div class="c-ui-input__icon c-ui-input__icon--phone"></div>

                @if ($errors->any())
                        <div class="alert alert-danger bg-body border-0 mt-2">
                            <ul class="list-inline text-center">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                </div>

            </div>
        </div>
        <div class="c-reg-form__row c-reg-form__row--align-center">
            <div class="c-reg-form__col">
                <button class="c-reg-form__submit-btn" id="btnSubmit">ورود</button>
            </div>
        </div>
    </form>
@else
    <form wire:submit.prevent="sellerActiveCode" class="needs-validation tab-pane fade show active"
          autocomplete="off" novalidate id="signin-tab">
        <div class="c-reg-form__row">
            <div class="c-reg-form__col c-reg-form__col--12 has-error">

                <div class="c-ui-input has-error">
                    <label class="form-label " for="si-email">کد تایید برای شماره {{ $seller->mobile }}
                        پیامک شد</label>
                    <div class="d-block text-center my-2">
                        <div>
                            ارسال مجدد کد تا
                            <span id="countdown">02:00</span>
                            دیگر
                        </div>
                    </div>
                    <input wire:model.lazy="input_active_code" class="c-ui-input__field c-ui-input__field--ltr c-ui-input__field--has-icon" type="text" id="si-email"
                           placeholder="لطفا شماره موبایل خود را وارد" required>
                    <div class="c-ui-input__icon svg-dc-modal-code__inner-shape"></div>
                    @if ($errors->any())
                        <div class="alert alert-danger bg-body border-0 mt-2">
                            <ul class="list-inline text-center">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="c-reg-form__row c-reg-form__row--align-center">
            <div class="c-reg-form__col">
                <button class="c-reg-form__submit-btn" id="btnSubmit">ورود</button>
            </div>
        </div>
    </form>

    <script>
        var seconds, temp;
        var GivenTime = document.getElementById('countdown').innerHTML;

        function countdown() {
            let time = document.getElementById('countdown').innerHTML;
            let timeArray = time.split(':')
            seconds = timeToSeconds(timeArray);

            if (seconds === 0) {
                clearTimeout(timeoutMyOswego);
            @this.show_send_code_form = false;
                return;
            }
            seconds--;
            temp = document.getElementById('countdown');
            temp.innerHTML = secondsToTime(seconds);
            var timeoutMyOswego = setTimeout(countdown, 1000);
        };
        countdown();

        function timeToSeconds(timeArray) {
            var minutes = (timeArray[0] * 1);
            var seconds = (minutes * 60) + (timeArray[1] * 1);
            return seconds;
        }

        function secondsToTime(secs) {
            console.log('ccccc');
            var hours = Math.floor(secs / (60 * 60));
            hours = hours < 10 ? '0' + hours : hours;
            var divisor_for_minutes = secs % (60 * 60);
            var minutes = Math.floor(divisor_for_minutes / 60);
            minutes = minutes < 10 ? '0' + minutes : minutes;
            var divisor_for_seconds = divisor_for_minutes % 60;
            var seconds = Math.ceil(divisor_for_seconds);
            seconds = seconds < 10 ? '0' + seconds : seconds;
            return minutes + ':' + seconds;
        }
    </script>
@endif
