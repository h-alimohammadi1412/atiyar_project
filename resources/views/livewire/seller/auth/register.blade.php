<div>
    {{-- {{ $active }} --}}
    <div class="container-fluid p-0 m-0">
        <div class="row p-0 m-0">
            <div class="col-12 col-md-4 text-center" style="background-color: #EEEEEE;">
                <a href="/" class="mt-5">
                    <img class="pt-5 mt-3" width="150px" src="{{ asset('img/weblogo.png') }}" alt="">
                </a>
                <div class="text-center mt-5">
                    <p class="fs-4 pt-5">
                        ثبت ‌نام در مرکز فروشندگان
                    </p>
                </div>
                <img width="295px" class="mt-5" src="{{ asset('img/register-shop.png') }}" alt="">
            </div>
            <div class="col-12 col-md-8">
                <div class="p-4 p-md-10">
                    <form type="post" id="regFrm" class="form text-center fv-plugins-bootstrap fv-plugins-framework"
                        wire:submit.prevent='registerSellerForm'>
                        @include('errors.error')
                        <input type="hidden" name="ref" id="ref">
                        <div class="form-group fv-plugins-icon-container"><input type="text" placeholder="شماره موبایل"
                                name="last_name" wire:model.lazy='phone'
                                class="form-control form-control-solid rounded-pill border-0 h-auto mt-2 px-8">
                            <div class="fv-plugins-message-container"></div>
                        </div>
                        <div class="form-group fv-plugins-icon-container"><input type="text" placeholder="رمز عبور"
                                name="last_name" wire:model.lazy='password'
                                class="form-control form-control-solid rounded-pill border-0 h-auto mt-2 px-8">
                            <div class="fv-plugins-message-container"></div>
                        </div>
                        <div class="form-group fv-plugins-icon-container"><input type="text"
                                placeholder="تکرار رمز عبور" name="last_name" wire:model.lazy='confirmPassword'
                                class="form-control form-control-solid rounded-pill border-0 h-auto mt-2 px-8">
                            <div class="fv-plugins-message-container"></div>
                        </div>
                        <div class="form-group fv-plugins-icon-container px-8">
                            <div class="checkbox-inline"><label
                                    class="checkbox checkbox-outline d-flex justify-content-center m-0 mt-4">
                                    <input type="checkbox" name="agreement" class="me-3" wire:click="activeRules">
                                    <span></span>
                                    <p class="mb-0"><a href="/sellers/rules" target="_blank"
                                            class="font-weight-bold ml-1"> قوانین و مقررات </a> <span class="mr-2">مربوط
                                            به فروشندگان را مطالعه کرده و می پذیرم .</span></p>
                                </label></div>
                        </div>
                        <span wire:click="$emit('resendCode')">{{ $active ? 'll' : 'iiii' }}</span>
                      

                        <div class="form-group" >
                            @if ($active)
                            <button 
                            class="btn btn-pill btn-success font-weight-bold opacity-90 px-15 py-3 m-2" style="">
                            ثبت نام
                            </button>
                            @else
                            <span  wire:click="$emit('resendCode')">
                                mmmmm
                            </span>
                            <div>
                                <small>لطفا کد فعال سازی ارسال شده را وارد نمایید</small>
                                <span class="btn-sm m-2 py-3 text-primary" wire:click="$set('active',false)">
                                    انصراف
                                    <i class="ci-close-circle"></i>
                                </span>
                                <input type="text" maxlength="4" autocomplete="off"
                                    class="form-control my-3 opacity-70 placeholder-white rounded-pill text-center">
                                <div class="countdown justify-content-center mb-4" >
                                    ارسال مجدد کد تایید پس از
                                    <strong id="countdown"  wire:click='resendCode'>
                                        00:06
                                    </strong>
                                </div>
                                <span type="button" id="return_code" style="display: none" wire:click='resendCode'
                                    class="btn btn-pill btn-primary font-weight-bold opacity-70 px-15 py-3 m-2"><i
                                        class="fas fa-redo"></i>
                                    ارسال مجدد کد فعال سازی
                                </span>
                                <span type="button" class="btn btn-info font-weight-bold opacity-70 px-15 py-3 m-2">
                                    <i class="fas fa-arrow-left"></i> فعال سازی
                                </span>
                                <a href="/login" class="btn btn-default font-weight-bold opacity-70 px-15 py-3 m-2"><i
                                        class="fas fa-arrow-left"></i>
                                    بازگشت
                                </a>
                            </div>
                            <script>
                                countdown();
                            </script>
                            
                            @endif
                        </div>
                        <div></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
      
    <script>
        var seconds, temp;
        var GivenTime = document.getElementById('countdown').innerHTML;

        function countdown() {
            
            let time = document.getElementById('countdown').innerHTML;
            // if(time == '00:00'){
            //     document.getElementById('countdown').innerHTML = "00:04";
            // }
            console.log(time);
            let timeArray = time.split(':')
            seconds = timeToSeconds(timeArray);

            if (seconds === 0) {
                clearTimeout(timeoutMyOswego);
                // @this.show_send_code_form = false;
                document.getElementById('return_code').style.display = 'block';
                return;
            }
            seconds--;
            temp = document.getElementById('countdown');
            temp.innerHTML = secondsToTime(seconds);
            var timeoutMyOswego = setTimeout(countdown, 1000);
        };
        // countdown();

        function timeToSeconds(timeArray) {
            var minutes = (timeArray[0] * 1);
            var seconds = (minutes * 60) + (timeArray[1] * 1);
            return seconds;
        }

        function secondsToTime(secs) {
            // console.log(secs);
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
</div>