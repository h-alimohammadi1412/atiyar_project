@section('title', 'افزودن محصول')
<div>
    <div class="main-content">
        <div class="row" style="background-color: white">
            <p class="box__title">افزودن محصول جدید</p>
            <form wire:submit.prevent="categoryForm" enctype="multipart/form-data" role="form"
                class="padding-10 categoryForm">

                @include('errors.error')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" wire:model.defer="product.title" placeholder="نام محصول "
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" wire:model.defer="product.en_name" placeholder="نام انگلیسی محصول "
                                class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <textarea rows="5" wire:model.defer="product.description" placeholder="توضیح کوتاه محصول " tabindex="-1"
                            wire:key="description_create" class="form-control" id="description_create">
                            
                            </textarea>
                    </div>
                    <div class="form-group">
                        <textarea wire:model.defer="product.body" name="body" placeholder="توضیح محصول " class="form-control"
                            id="body_create">

                            </textarea>
                    </div>
                </div>
                <div class="row p-0 m-0">
                    <div class="col-xs-12 col-md-6 p-0 order-1 order-md-0 ">
                        <div class="col-12">
                            <div class="form-group">
                                <select wire:model.defer="product.category_id" name="category_id" id=""
                                    class="form-control">
                                    @foreach (\App\Models\Category::getCategories(true) as $key => $category)
                                        <option value="{{ $key }}">{{ $category }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <select wire:model.defer="product.brand_id" name="brand_id" id=""
                                    class="form-control">
                                    <option value="1">برند محصول</option>
                                    @foreach (\App\Models\Brand::all() as $brand)
                                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <select wire:model.defer="color_id" name="color_id[]" id="" class="form-control"
                                    multiple>
                                    <option value="1">رنگ محصول</option>
                                    @foreach (\App\Models\Color::all() as $color)
                                        <option value="{{ $color->id }}"
                                            style="background-color: {{ $color->value }}">
                                            {{ $color->name }}</option>
                                    @endforeach
                                </select>
                            </div>                        
                        </div>
                        <div class="col-12">
                            <input type="text" wire:model.defer="product.weight" placeholder="وزن محصول "
                                class="form-control">
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input type="text" wire:model.defer="product.tags" placeholder="تگ های محصول "
                                    class="form-control">
                                @if ($this->product->tags)
                                    <span class="alert-info alert "
                                        style="margin-top: 5px;padding: 6px !important;">{{ $this->product->tags }}</span>
                                @endif
                            </div>
                        </div>
                        {{-- <div class="col-12">
                            <div class="form-group">
                                <select wire:model.defer="product.status_product" name="status_product" id=""
                                    class="form-control">
                                    <option value="-5">وضعیت محصول</option>
                                    @foreach (\App\Models\Product::productStatus() as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div> --}}
                        <div class="col-12">
                            <div class="row p-0 m-0">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="notificationGroup">
                                            <input id="option10" type="checkbox" wire:model.defer="product.shipment"
                                                name="shipment" class="form-control">
                                            <label for="option10">موجود در انبار دیجی کالا:</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="notificationGroup">
                                            <input id="option12" type="checkbox" wire:model.defer="product.original"
                                                name="original" class="form-control">
                                            <label for="option12">محصول با کیفیت اصلی:</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="notificationGroup">
                                            <input id="option13" type="checkbox" wire:model.defer="product.gift"
                                                name="gift" class="form-control">
                                            <label for="option13">محصول به عنوان هدیه:</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-brand my-5 w-100">افزودن محصول</button>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 p-0 ps-md-4 order-0 order-md-1">
                        <div x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true"
                            x-on:livewire-upload-finish="isUploading = false"
                            x-on:livewire-upload-error="isUploading = false"
                            x-on:livewire-upload-progress="progress = $event.detail.progress">

                            <input type="file" id="resume" wire:model.defer="img" aria-label="Resume"
                                class="form-control" />

                            <div wire:ignore class="progress mt-2" id="progressbar" style="display: none">
                                <div class="progress-bar" role="progressbar" style="width: 0%;">0%</div>
                            </div>
                        </div>
                        <div>
                            @if ($img)
                                <img class="form-control mt-3 mb-3" width="400" src="{{ $img->temporaryUrl() }}"
                                    alt="">
                            @endif
                        </div>
                    </div>
                </div>
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
