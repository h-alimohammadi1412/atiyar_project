@section('title', 'گالری تصاویر محصولات')
<div>
    <div class="main-content" wire:init="loadCategory">
        <div class="tab__box">
            <div class="tab__items">
                <a class="tab__item "> گالری تصاویر محصول -
                    {{ $this->product->title }}
                </a>

                <div>
                    <form action="{{ url('admin/product/gallery_upload/' . $product->id) }}" class="dropzone"
                        id="upload_file">
                        @csrf
                        <input type="file" name="file" multiple="multiple" class="d-none">
                        <div class="dz-default dz-message"><button class="dz-button" type="button">کشیدن تصاویر برای
                                آپلود</button></div>
                    </form>
                </div>



            </div>
        </div>
        <div class="row">
            <div class="col-12 margin-left-10 margin-bottom-15 border-radius-3">

                <div class="table__box">
                    <table class="table" id="gallery_table">
                        <input id="product_id_sortable" type="hidden" value="{{ $product->id }}">
                        <thead role="rowgroup">
                            <tr role="row" class="title-row">
                                <th>آیدی</th>
                                <th> تصویر</th>
                                <th>نام محصول</th>
                                <th>وضعیت تصویر</th>
                                <th>موقعیت تصویر</th>
                                <th>عملیات</th>
                            </tr>
                        </thead>

                        <tbody id="sortable">
                            @if ($readyToLoad)
                                @foreach ($galleries as $gallery)
                                    <tr role="row"  id="{{$gallery->id}}">
                                        <td><a href="">{{ $gallery->id }}</a></td>
                                        <td>
                                            <img src="{{ asset('files/uploads/products/gallerys/' . $gallery->img) }}"
                                                alt="img" width="100px">
                                        </td>
                                        <td>
                                            {{ $gallery->product->title }}
                                        </td>

                                        <td>
                                            @if ($gallery->status == 1)
                                                <button
                                                    wire:click="updateStatus('Gallery','gallery','گالری','status',{{ $gallery->id }})"
                                                    type="submit" class="badge-success badge"
                                                    style="background-color: green">فعال
                                                </button>
                                            @else
                                                <button
                                                    wire:click="updateStatus('Gallery','gallery','گالری','status',{{ $gallery->id }})"
                                                    type="submit" class="badge-danger badge"
                                                    style="background-color: red">
                                                    غیرفعال
                                                </button>
                                            @endif
                                        </td>
                                        <td><a href="">{{ $gallery->position }}</a></td>
                                        <td> 
                                            <a wire:click="deletedFieldAsModel('Gallery','galley','تصویر محصول',{{ $gallery->product->title }},'{{ $gallery->id }}')"
                                                type="submit" class="item-delete mlg-15" title="حذف"></a>                                     
                                        </td>
                                    </>
                                @endforeach
                            @else
                                <div class="alert-warning alert">
                                    در حال خواندن اطلاعات از دیتابیس ...
                                </div>
                            @endif
                        </tbody>
                       @if($galleries) {{ $galleries->render() }} @endif

                    </table>
                </div>


            </div>

        </div>


    </div>



    <script src="{{ asset('js/dropzone.min.js') }}" type="text/javascript"></script>
    <script>
        myDropzone.options.uploadFile = {
            acceptedFiles: ".png,.jpg,.jpeg",
            addRemoveLinks: true,
            init: function() {
                this.options.dictRemoveFile = 'حذف';
                this.options.dictInvalidFileType = 'امکان آپلود این فایل وجود ندارد.';
                this.on('success', function(file, response) {
                    if (response == 1) {
                        file.previewElement.classList.add('dz-success');
                    } else {
                        file.previewElement.classList.add('dz-error');
                        $(file.previewElement).find('.dz-error-message').text('خطا در آپلود فایل');
                    }

                });
                this.on('error', function(file, response) {
                    file.previewElement.classList.add('dz-error');
                    $(file.previewElement).find('.dz-error-message').text('خطا در آپلود فایل');
                });
            }
        };
    </script>
</div>
