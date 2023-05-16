@section('title', 'دسته ها')
<div>
    <div class="main-content" wire:init="loadCategory">
        <div class="tab__box">
            <div class="tab__items">
                <a class="tab__item">جستجو:</a>
                <a class="t-header-search">
                    <form action="" onclick="event.preventDefault();">
                        <input wire:model.debounce.1000ms="search" type="text" class="text"
                            style="font-family: IRANYekan" placeholder="جستجوی دسته ...">
                    </form>
                </a>
                <a class="tab__item btn btn-danger" href="{{ route('category.trashed') }}"
                    style="color: white;float: left;margin-top: 10px;margin-left: 10px">سطل زباله
                    ({{ \App\Models\Category::onlyTrashed()->count() }})
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-8 margin-left-10 margin-bottom-15 border-radius-3">
                <div class="table__box">
                    <table class="table ">
                        <thead role="rowgroup">
                            <tr role="row" class="title-row">
                                <th>شناسه</th>
                                <th>تصویر دسته</th>
                                <th>عنوان دسته</th>
                                <th>نام لاتین دسته</th>
                                <th>وضعیت دسته</th>
                                <th>مشخصات فنی</th>
                                <th>عملیات</th>
                                <th>زیر دسته ها</th>
                            </tr>
                        </thead>
                        @if ($readyToLoad)
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr role="row">
                                        <td><a href="">{{ $category->id }}</a></td>
                                        <td>
                                            <img src="/storage/{{ $category->img }}" alt="img" width="100px">
                                        </td>
                                        <td><a href="">{{ $category->title }}</a></td>
                                        <td><a href="">{{ $category->en_name }}</a></td>

                                        <td>
                                            @can('status-category')
                                                @if ($category->status == 1)
                                                    <button wire:click="updateStatus('Category','category','دسته','status',{{ $category->id }})"
                                                        type="submit" class="badge-success badge"
                                                        style="background-color: green">فعال
                                                    </button>
                                                @else
                                                    <button wire:click="updateStatus('Category','category','دسته','status',{{ $category->id }})"
                                                        type="submit" class="badge-danger badge"
                                                        style="background-color: red">
                                                        غیرفعال
                                                    </button>
                                                @endif
                                            @endcan
                                        </td>
                                        <td>
                                            <a href="{{ url('admin/attribute/'.$category->id) }}">
                                                <img width:="" 20px;="" src="{{ asset('icons/icons/list-check.svg') }}" alt="images">
                                            </a>
                                        </td>
                                        <td>
                                            @can('delete-category')
                                                <a wire:click="deleteCategory({{ $category->id }})" type="submit"
                                                    class="item-delete mlg-15" title="حذف"></a>
                                            @endcan
                                            @can('edit-category')
                                                <a href="{{ route('category.update', $category) }}" class="item-edit "
                                                    title="ویرایش"></a>
                                            @endcan
                                        </td>
                                        <td>
                                            @if (isset($category->getChild[0]) && $category->getChild[0] != null)
                                                <a href="{{ url('admin/category?category_id=' . $category->id) }}"
                                                    class="btn btn-sm btn-success">
                                                    زیر دسته
                                                </a>
                                            @else
                                                <span class="btn btn-sm btn-warning">
                                                    ندارد
                                                </span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                            {{ $categories->render() }}
                        @else
                            <div class="alert-warning alert">
                                در حال خواندن اطلاعات از دیتابیس ...
                            </div>


                        @endif


                    </table>
                </div>


            </div>
            <div class="col-4 bg-white">
                <p class="box__title">ایجاد دسته بندی جدید</p>
                @can('create-category')
                    <form action="" wire:submit.prevent="categoryForm" enctype="multipart/form-data" role="form"
                        class="padding-10 categoryForm form_add">

                        @include('errors.error')
                        <div class="form-group">
                            <input type="text" wire:model.lazy="category.title" placeholder="عنوان دسته "
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" wire:model.lazy="category.en_name" placeholder="نام لاتین دسته "
                                class="form-control">
                        </div>

                        <div class="form-group">
                            <input type="text" wire:model.lazy="category.link" placeholder="لینک دسته "
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea wire:model.lazy="category.description" class="form-control" placeholder=" توضیحات دسته ">

                        </textarea>
                        </div>
                        <div class="form-group">
                            <select wire:model.lazy="category.parent_id" class="form-control" placeholder=" توضیحات دسته ">
                                @foreach (App\Models\Category::getCategories() as $id => $category)
                                    <option value="{{ $id }}">{{ $category }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <div class="notificationGroup">
                                <input id="option4" type="checkbox" wire:model.lazy="category.status" name="status"
                                    class="form-control">
                                <label for="option4">نمایش در دسته اصلی:</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="notificationGroup">
                                <input id="option5" type="checkbox" wire:model.lazy="category.notShow" name="notShow"
                                    class="form-control">
                                <label for="option5">نمایش در لیست ها :</label>
                            </div>
                        </div>

                        <div x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true"
                            x-on:livewire-upload-finish="isUploading = false"
                            x-on:livewire-upload-error="isUploading = false"
                            x-on:livewire-upload-progress="progress = $event.detail.progress">

                            <input type="file" id="resume" wire:model.lazy="img" aria-label="Resume"
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

                        <button class="btn btn-brand mt-3">افزودن دسته</button>
                    </form>
                @endcan
            </div>
        </div>


    </div>

    <script>
        document.addEventListener('livewire:load', () => {
            let progressSection = document.querySelector('#progressbar'),
                progressBar = progressSection.querySelector('.progress-bar');
            document.addEventListener('livewire-upload-start', () => {
                console.log('شروع آپلود');
                progressSection.style.display = 'block';
            });
            document.addEventListener('livewire-upload-progress', (event) => {
                console.log(`${event.detail.progress}%`);
                progressBar.style.width = `${event.detail.progress}%`;
                progressBar.textContent = `${event.detail.progress}%`;
            });
            document.addEventListener('livewire-upload-finish', () => {
                console.log('اتمام آپلود');
                progressSection.style.display = 'none';
            });
            document.addEventListener('livewire-upload-error', () => {
                console.log('ارور موقع آپلود');
                progressSection.style.display = 'none';
            });

        });
    </script>
</div>
