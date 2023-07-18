{{-- <div>
    @section('title')
        ورود به حساب کاربری
    @endsection
    <main id="main">
        <div class="c-toast__container js-toast-container">
            <div class="c-toast js-toast" style="display: none">
                <div class="c-toast__text js-toast-text">

                </div>
                <div class="c-toast__btn-container">
                    <button type="button" class="js-toast-btn o-link o-link--sm o-link--no-border o-btn">
                        متوجه شدم
                    </button>
                </div>
            </div>
        </div>
        <div class="semi-modal-layout">
            <section class="o-page o-page--account-box">
                <div class="u-hidden js-invalid-login-message" data-invalid="0">

                </div>
                <div class="c-login__box">

                    <form class="c-login__form"  id="loginForm"
                          wire:submit.prevent="userForm"
                          novalidate="novalidate">

                        <div class="c-login__header-logo c-login__header-logo--lg">
                            <a href="/">
                                <img alt="DIGIKALA.COM" src="{{asset('css/bc60cf05.svg')}}">
                            </a>
                        </div>

                        <div class="c-login__form-header">
                            ورود / ثبت ‌نام
                        </div>
                        <div class="c-login__opt-mobile-message">
                            شماره موبایل یا پست الکترونیک  خود را وارد کنید
                        </div>
                        <div class="c-login__form-row">
                            <label class="o-form__field-container">
                                <div class="o-form__field-frame">
                                    <input wire:model.lazy="user.email_phone" name="email_phone" type="" placeholder="" value="" class="o-form__field js-input-field ">
                                    <span type="button" class="o-form__field-clear-button js-ui-field-cleaner u-hidden"></span>
                                </div>
                            </label>

                        </div>
                        <button type="submit" class="o-btn o-btn--contained-red-lg c-login__form-action btn-primary btn-shadow">
                            ورود به آتی یار
                        </button>
                        <p class="c-login__footer">
                            با ورود و یا ثبت نام در آتی یار شما
                            <a href="/page/terms/" target="_blank">
                                شرایط و قوانین
                            </a>
                            استفاده از سرویس های سایت آتی یار و
                            <a href="/page/privacy/" target="_blank">
                                قوانین حریم خصوصی
                            </a>
                            آن را می‌پذیرید.
                        </p>

                    </form>
                </div>
            </section>
        </div>
    </main>
</div>
 --}}

<div class="align-items-center d-flex justify-content-between" id="signin-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered mt-10" role="document" style="width: 428px; height: 400px;">
        <div class="modal-content w-100">
            <div class="modal-header bg-secondary">
                <ul class="nav nav-tabs card-header-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link fw-medium active" href="#signin-tab" data-bs-toggle="tab"
                            role="tab" aria-selected="true"><i class="ci-user me-2 mt-n1"></i>ورود / ثبت نام</a>
                    </li>
                </ul>
            </div>
            <div class="modal-body tab-content py-4">

                @if (!$show_send_code_form)
                    <form wire:submit.prevent="userForm" class="needs-validation tab-pane fade show active"
                        autocomplete="off" novalidate id="signin-tab">
                        <div class="mb-3 pt-4 text-center">
                            <img src="{{ asset('img/weblogo.png') }}" width="142" alt="آتی یار">
                        </div>
                        <div class="mb-3 pt-4">
                            <label class="form-label " for="si-email">لطفا شماره موبایل خود را وارد
                                کنید</label>
                            <input wire:model.lazy="user.mobile" class="form-control" type="text" id="si-email"
                                placeholder="...09" required>
                            @if ($errors->any())
                                <div class="alert alert-danger bg-body border-0 mt-2">
                                    <ul class="list-inline text-center">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <button class="btn btn-primary btn-shadow d-block w-100"
                                style="margin-top: 4rem !important;" type="submit">ورود</button>
                        </div>
                    </form>
                @else
                    <form wire:submit.prevent="userActiveCode" class="needs-validation tab-pane fade show active"
                        autocomplete="off" novalidate id="signin-tab">
                        <div class="mb-3 pt-4 text-center">
                            <img src="{{ asset('img/weblogo.png') }}" width="142" alt="آتی یار">
                        </div>
                        <div class="mb-3 pt-4">
                            <label class="form-label " for="si-email">کد تایید برای شماره {{ $user->phone }}
                                پیامک شد</label>
                            {{-- <span class="d-block text-center my-2" x-data="{ show: true }" x-show="show"
                                x-init="setTimeout(() => show = false, 5000)">ارسال مجدد کد تا <span id="countdown">00:05</span>
                                دیگر</span> --}}
                            <div class="d-block text-center my-2">
                                <div>
                                    ارسال مجدد کد تا
                                    <span id="countdown">02:00</span>
                                    دیگر
                                </div>
                            </div>
                            <input wire:model.lazy="input_active_code" value="" class="form-control"
                                type="text" id="si-email" required maxlength="5">
                            @if ($errors->any())
                                <div class="alert alert-danger bg-body border-0 mt-2">
                                    <ul class="list-inline text-center">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <button class="btn btn-primary btn-shadow d-block w-100"
                                style="margin-top: 4rem !important;" type="submit">ورود</button>
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
            </div>
        </div>
    </div>
</div>
