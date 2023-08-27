@section('title', 'افزودن بازاریاب')
<div>

    <div class="main-content">
        <div class="row" style="background-color: white">
            <p class="box__title">افزودن بازاریاب جدید</p>
            <form wire:submit.prevent="categoryForm" enctype="multipart/form-data" role="form"
                class="padding-10 categoryForm">
                <div class="row">
                    <div class="col-md-6">
                        @include('errors.error')

                        <h4>مشخصات شخصی</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" wire:model.lazy="marketer.name" placeholder="نام بازاریاب "
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" wire:model.lazy="marketer.lname"
                                        placeholder="نام خانوادگی بازاریاب " class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">

                                    <input type="text" wire:model.lazy="marketer.shenasname_code"
                                        placeholder="شماره شناسنامه " class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" wire:model.lazy="marketer.national_code"
                                        placeholder="کدملی بازاریاب " class="form-control">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">

                                    <input type="text" wire:model.lazy="marketer.email" placeholder="ایمیل "
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" wire:model.lazy="marketer.mobile" placeholder="موبایل "
                                        class="form-control">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">

                                    <input type="date" wire:model.lazy="marketer.birth" placeholder="تاریخ تولد "
                                           class="form-control">
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" wire:model.lazy="marketer.birth_location" placeholder="محل تولد "
                                           class="form-control">
                                </div>
                            </div>

                        </div>
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">

                                    <select wire:model.lazy="marketer.gender" name="gender" id=""
                                            class="form-control">
                                        <option value="-1">انتخاب جنسیت</option>
                                        <option value="0">آقا</option>
                                        <option value="1">خانم</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">

                                    <select wire:model.lazy="marketer.level_marketer" name="level_marketer" id=""
                                            class="form-control">
                                        <option value="-1">سطح بازاریاب</option>
                                        <option value="0">معمولی</option>
                                        <option value="1">حرفه ای</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">

                                    <select wire:model.lazy="marketer.maliat" name="maliat" id=""
                                            class="form-control">
                                        <option value="-1">ملیت</option>
                                        <option value="0">ایرانی</option>
                                        <option value="1">غیر ایرانی</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" wire:model.lazy="marketer.telegram_link" placeholder="لینک تلگرام"
                                           class="form-control">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">

                                    <input type="text" wire:model.lazy="marketer.instagram_link" placeholder="لینک اینستاگرام "
                                           class="form-control">
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" wire:model.lazy="marketer.aparat_link" placeholder="لینک آپارات"
                                           class="form-control">
                                </div>
                            </div>

                        </div>

                        <hr>
                        <h3>اطلاعات بازاریاب</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" wire:model.lazy="marketer.type_marketer"
                                        placeholder="نوع بازاریاب " class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" wire:model.lazy="marketer.code_marketer" placeholder="کد بازاریاب "
                                        class="form-control">
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">درباره بازاریاب</label>
                                        <textarea cols="3" rows="3" wire:model.lazy="marketer.about" class="form-control">
                    </textarea>
                                    </div>
                                </div>
                            </div>


                        </div>


                    </div>
                    <div class="col-md-6">
                        <hr>
                        <h3>اطلاعات بانکی</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" wire:model.lazy="marketer.bank_shaba"
                                           placeholder="شماره شبا " class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" wire:model.lazy="marketer.bank_account_name"
                                           placeholder="نام حساب بانکی " class="form-control">
                                </div>
                            </div>
                        </div>
                        <h4>اطلاعات سکونت</h4>
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" wire:model.lazy="marketer.province" placeholder="استان "
                                           class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" wire:model.lazy="marketer.city" placeholder="شهر "
                                           class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" wire:model.lazy="marketer.town" placeholder="شهرستان "
                                           class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" wire:model.lazy="marketer.village" placeholder="روستا "
                                           class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" wire:model.lazy="marketer.city_part" placeholder="محله "
                                           class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" wire:model.lazy="marketer.alley" placeholder="کوچه "
                                           class="form-control">
                                </div>
                            </div>
                        </div>                            <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" wire:model.lazy="marketer.plaque" placeholder="پلاک "
                                       class="form-control">
                            </div>
                        </div>
                    </div>
                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" wire:model.lazy="marketer.address" placeholder="آدرس "
                                           class="form-control">
                                </div>
                            </div>

                        </div>
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" wire:model.lazy="marketer.pin_code" placeholder="کدپستی "
                                           class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" wire:model.lazy="marketer.telephone"
                                           placeholder="تلفن بازاریاب " class="form-control">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" wire:model.lazy="marketer.location" placeholder="موقعیت "
                                           class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" wire:model.lazy="marketer.website" placeholder="وبسایت "
                                           class="form-control">
                                </div>
                            </div>

                        </div>
                        <div class="form-group">
                            <input type="file" wire:model.lazy="logo" class="form-control">
                            <span class="mt-2 text-danger" wire:loading wire:target="logo">در حال آپلود ...</span>

                            <div wire:ignore class="progress mt-2" id="progressbar" style="display: none">
                                <div class="progress-bar" role="progressbar" style="width: 0%;">0%</div>
                            </div>
                        </div>
                    </div>







                <div>
                    @if ($logo)
                        <img style="width: 400px" class="form-control mt-3 mb-3" width="400"
                            src="{{ $logo->temporaryUrl() }}" alt="">
                    @endif
                </div>

                <button class="btn btn-brand">افزودن بازاریاب</button>
            </form>
        </div>
    </div>

    <script>
        ClassicEditor
            .create(document.querySelector('#description_create'), {
                language: {
                    ui: 'fa',
                    content: 'fa'
                }
            })
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#body_create'), {
                language: {
                    ui: 'fa',
                    content: 'fa'
                }
            })
            .catch(error => {
                console.error(error);
            });

        document.addEventListener('livewire:load', () => {
            let progressSection = document.querySelector('#progressbar'),
                progressBar = progressSection.querySelector('.progress-bar');

            document.addEventListener('livewire-upload-start', () => {
                console.log('شروع آپلود');
                progressSection.style.display = 'flex';
            });
            document.addEventListener('livewire-upload-finish', () => {
                console.log('اتمام آپلود');
                progressSection.style.display = 'none';
            });
            document.addEventListener('livewire-upload-error', () => {
                console.log('ارور موقع آپلود');
                progressSection.style.display = 'none';
            });
            document.addEventListener('livewire-upload-progress', (event) => {
                console.log(`${event.detail.progress}%`);
                progressBar.style.width = `${event.detail.progress}%`;
                progressBar.textContent = `${event.detail.progress}%`;
            });

        });
    </script>
</div>
