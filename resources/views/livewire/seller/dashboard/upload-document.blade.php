<div>
    @include('livewire.seller.dashboard.profile.nav',['seller'=>$seller])
    <div class="container mb-5 pb-3">
        <div class="bg-light shadow-lg rounded-3 overflow-hidden">
            <div class="row">
                <!-- Sidebar-->
                @include('livewire.seller.dashboard.profile.sidebar')

                <section class="col-lg-9 pt-lg-4 pb-4 mb-3">
                    <div class="pt-2 px-4 ps-lg-0 pe-xl-5">
                        <!-- Title-->
                        <h2 class="border-bottom h3 pb-4 py-2 text-center text-sm-start">آپلود مدارک</h2>

                        <div class="alert alert-warning mt-5 fs-sm d-flex justify-content-center align-items-center">
                            <i class="ci-security-close fs-2 me-3"></i>
                            <div>

                                عضو محترم سامانه آتی یار ، قرارداد همکاری شما هنوز نهایی نگردیده است. لطفا برای تکمیل
                                تایید هویت خود و تایید توسط کارشناسان ما ، مدارک هویتی زیر را با کیفیتی خوب آپلود نموده
                                و برای ما ارسال نمایید.
                            </div>
                        </div>
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="file-drop-area mb-3 mt-5 w-50 me-3">
                                <div class="form-text fs-5 mb-2 text-body">صفحه اول شناسنامه</div>
                                <div wire:loading wire:target="certificateImg">در حال پردازش...</div>
                                @if ($certificateImg)
                                <img class="img-fluid" width="100px" src="{{ $certificateImg->temporaryUrl() }}" alt="">
                                @else
                                @if ($seller->certificate_img)
                                <img class="img-fluid" width="100px" src="/storage/{{ $seller->certificate_img }}" alt="">
                                @endif
                                @endif
                                <div class="file-drop-icon ci-cloud-upload"></div>
                                <span class="file-drop-message">برای
                                    بارگذاری تصویر، کلیک کنید و یا آن را بکشید و رها کنید</span>
                                <input class="file-drop-input" type="file" wire:model='certificateImg'>

                                <button class="btn btn-primary d-block w-100" wire:click='storeCertificateImg'><i
                                        class="ci-cloud-upload fs-lg me-2"></i>آپلود تصویر</button>
                            </div>
                            <div class="file-drop-area mb-3 mt-5 w-50">
                                <div class="form-text fs-5 mb-2 text-body">اسکن کارت ملی</div>
                                 <div wire:loading wire:target="nationalCardImg">در حال پردازش...</div>
                                 @if ($nationalCardImg)
                                <img class="img-fluid" width="100px" src="{{ $nationalCardImg->temporaryUrl() }}" alt="">
                                @else
                                @if ($seller->nationalCard_img)
                                <img class="img-fluid" width="100px" src="/storage/{{ $seller->nationalCard_img }}" alt="">
                                @endif
                                @endif
                                <div class="file-drop-icon ci-cloud-upload"></div><span class="file-drop-message">برای
                                    بارگذاری تصویر، کلیک کنید و یا آن را بکشید و رها کنید</span>
                                <input class="file-drop-input" type="file" wire:model='nationalCardImg' >

                                <button class="btn btn-primary d-block w-100" wire:click='storeNationalCardImg'><i
                                        class="ci-cloud-upload fs-lg me-2"></i>آپلود تصویر</button>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="file-drop-area mb-3 mt-5 w-50 me-3">
                                <div class="form-text fs-5 mb-2 text-body">تصویر پرسنلی</div>
                                <div wire:loading wire:target="personalPictureImg">در حال پردازش...</div>
                                @if ($personalPictureImg)
                                <img class="img-fluid" width="100px" src="{{ $personalPictureImg->temporaryUrl() }}" alt="">
                                @else
                                @if ($seller->personalPicture_img)
                                <img class="img-fluid" width="100px" src="/storage/{{ $seller->personalPicture_img }}" alt="">
                                @endif
                                @endif
                                <div class="file-drop-icon ci-cloud-upload"></div><span class="file-drop-message">برای
                                    بارگذاری تصویر، کلیک کنید و یا آن را بکشید و رها کنید</span>
                                <input class="file-drop-input" type="file" wire:model='personalPictureImg'>

                                <button class="btn btn-primary d-block w-100" wire:click='storePersonalPictureImg'><i
                                        class="ci-cloud-upload fs-lg me-2"></i>آپلود تصویر</button>
                            </div>
                            <div class="file-drop-area mb-3 mt-5 w-50">
                                <div class="form-text fs-5 mb-2 text-body">تصویر مجوز اتحادیه یا شرکت</div>
                                <div wire:loading wire:target="licenseImg">در حال پردازش...</div>
                                @if ($licenseImg)
                                <img class="img-fluid" width="100px" src="{{ $licenseImg->temporaryUrl() }}" alt="">
                                @else
                                @if ($seller->license_img)
                                <img class="img-fluid" width="100px" src="/storage/{{ $seller->license_img }}" alt="">
                                @endif
                                @endif
                                <div class="file-drop-icon ci-cloud-upload"></div><span class="file-drop-message">برای
                                    بارگذاری تصویر، کلیک کنید و یا آن را بکشید و رها کنید</span>
                                <input class="file-drop-input" type="file" wire:model='licenseImg'>

                                <button class="btn btn-primary d-block w-100" wire:click='storeLicenseImg'><i
                                        class="ci-cloud-upload fs-lg me-2"></i>آپلود تصویر</button>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>