@section('title', 'افزودن فروشنده')
<div>

    <div class="main-content">
        <div class="row" style="background-color: white">
            <p class="box__title">افزودن فروشنده جدید</p>
            <form wire:submit.prevent="categoryForm" enctype="multipart/form-data" role="form"
                class="padding-10 categoryForm">
                <div class="row">
                    @include('errors.error')
                    <div class="col-md-6">


                        <h4>مشخصات شخصی</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" wire:model.lazy="seller.name" placeholder="نام فروشنده "
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" wire:model.lazy="seller.lname"
                                        placeholder="نام خانوادگی فروشنده " class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">

                                    <input type="text" wire:model.lazy="seller.shenasname_code"
                                        placeholder="شماره شناسنامه " class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" wire:model.lazy="seller.national_code"
                                        placeholder="کدملی فروشنده " class="form-control">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">

                                    <input type="text" wire:model.lazy="seller.email" placeholder="ایمیل "
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" wire:model.lazy="seller.mobile" placeholder="موبایل "
                                        class="form-control">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">

                                    <input type="date" wire:model.lazy="seller.birth" placeholder="تاریخ تولد "
                                           class="form-control">
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">

                                    <select wire:model.lazy="seller.code_seller" name="code_seller" id=""
                                            class="form-control">
                                        <option value="-1">انتخاب جنسیت</option>
                                        <option value="0">آقا</option>
                                        <option value="1">خانم</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">

                                    <input type="text" wire:model.lazy="seller.birth_location" placeholder="محل تولد "
                                           class="form-control">
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" wire:model.lazy="seller.telegram_link" placeholder="لینک تلگرام"
                                           class="form-control">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">

                                    <input type="text" wire:model.lazy="seller.instagram_link" placeholder="لینک اینستاگرام "
                                           class="form-control">
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" wire:model.lazy="seller.aparat_link" placeholder="لینک آپارات"
                                           class="form-control">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">

                                    <select wire:model.lazy="seller.maliat" name="maliat" id=""
                                        class="form-control">
                                        <option value="-1">ملیت</option>
                                        <option value="0">ایرانی</option>
                                        <option value="1">غیر ایرانی</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h3>اطلاعات فروشنده</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" wire:model.lazy="seller.brand_name"
                                        placeholder="برند تجاری فروشنده " class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" wire:model.lazy="seller.type_seller"
                                        placeholder="نوع فروشنده " class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" wire:model.lazy="seller.code_seller" placeholder="کد فروشنده "
                                        class="form-control">
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">درباره فروشنده</label>
                                        <textarea cols="3" rows="3" wire:model.lazy="seller.about" class="form-control">
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
                                    <input type="text" wire:model.lazy="seller.bank_shaba"
                                           placeholder="شماره شبا " class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" wire:model.lazy="seller.bank_account_name"
                                           placeholder="نام حساب بانکی " class="form-control">
                                </div>
                            </div>
                        </div>
                        <h4>اطلاعات سکونت</h4>
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" wire:model.lazy="seller.state" placeholder="استان "
                                           class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" wire:model.lazy="seller.city" placeholder="شهر "
                                           class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" wire:model.lazy="seller.town" placeholder="شهرستان "
                                           class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" wire:model.lazy="seller.village" placeholder="روستا "
                                           class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" wire:model.lazy="seller.city_part" placeholder="محله "
                                           class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" wire:model.lazy="seller.alley" placeholder="کوچه "
                                           class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" wire:model.lazy="seller.plaque" placeholder="پلاک "
                                       class="form-control">
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" wire:model.lazy="seller.address" placeholder="آدرس "
                                           class="form-control">
                                </div>
                            </div>

                        </div>
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" wire:model.lazy="seller.pin_code" placeholder="کدپستی "
                                           class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" wire:model.lazy="seller.telephone"
                                           placeholder="تلفن فروشنده " class="form-control">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" wire:model.lazy="seller.location" placeholder="موقعیت "
                                           class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" wire:model.lazy="seller.website" placeholder="وبسایت "
                                           class="form-control">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="staticEmail2" class="sr-only">Email</label>
                                    <input type="file" wire:model.lazy="logo" class="form-control">
                                    <span class="mt-2 text-danger" wire:loading wire:target="logo">در حال آپلود ...</span>

                                    <div wire:ignore class="progress mt-2" id="progressbar" style="display: none">
                                        <div class="progress-bar" role="progressbar" style="width: 0%;">0%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <hr>
                            <h4>اطلاعات فروشگاه</h4>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" wire:model.lazy="seller.store_index" placeholder="کد فروشگاه "
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" wire:model.lazy="seller.job_name" placeholder="نام فروشگاه "
                                               class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" wire:model.lazy="seller.shop_address" placeholder="آدرس فروشگاه "
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" wire:model.lazy="seller.store_username"
                                               placeholder="اسم فروشگاه " class="form-control">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" wire:model.lazy="seller.zarinpal_merchant_id" placeholder="کد زرین پال "
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" wire:model.lazy="seller.call_hours" placeholder="ساعات تماس "
                                               class="form-control">
                                    </div>
                                </div>
                            </div>
                            {{--
                                                    <div class="form-group">
                                                        <input type="file" wire:model.lazy="seller.store_logo" class="form-control">
                                                        <span class="mt-2 text-danger" wire:loading wire:target="logo">در حال آپلود ...</span>

                                                        <div wire:ignore class="progress mt-2" id="progressbar" style="display: none">
                                                            <div class="progress-bar" role="progressbar" style="width: 0%;">0%</div>
                                                        </div>
                                                    </div>
                            --}}

                    </div>

                    </div>







                <div>
                    @if ($logo)
                        <img style="width: 400px" class="form-control mt-3 mb-3" width="400"
                            src="{{ $logo->temporaryUrl() }}" alt="">
                    @endif
                </div>

                <button class="btn btn-brand">افزودن فروشنده</button>
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
