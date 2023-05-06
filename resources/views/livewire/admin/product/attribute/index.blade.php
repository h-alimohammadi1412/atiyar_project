@section('title', 'مشخصات کالا ')
<div>
    <div class="main-content" wire:init="loadCategory">
        <div class="tab__box d-flex tab_items_flex">
            <div class="tab__items grow-1">        
                <div class="d-none d-lg-inline-block">
                </div>
                <a class="tab__item">جستجو: </a>

                <a class="t-header-search">
                    <form action="" onclick="event.preventDefault();">
                        <input wire:model.debounce.1000="search" type="text" class="text"
                            placeholder="جستجوی مشخصات کالا ...">
                    </form>
                </a>



            </div>
            <div class="tab__items">
                <a class="tab__item btn btn-danger" href="{{ route('attribute.trashed') }}"
                    style="color: white;margin-left: 10px">سطل زباله
                    ({{ \App\Models\Attribute::onlyTrashed()->count() }})
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-8 margin-left-10 margin-bottom-15 border-radius-3">

                <div class="table__box">
                    <table class="table">

                        <thead role="rowgroup">
                            <tr role="row" class="title-row">
                                <th>آیدی</th>
                                <th>عنوان </th>
                                <th>مشخصه والد</th>
                                <th>موقعیت</th>
                                <th>وضعیت </th>
                                <th>عملیات</th>
                            </tr>
                        </thead>

                        @if ($readyToLoad)
                            <tbody>
                                @foreach ($attributes as $attribute)
                                    <tr role="row">
                                        <td><a href="">{{ $attribute->id }}</a></td>
                                        <td><a href="">{{ $attribute->title }}</a></td>
                                        <td>
                                            @if ($attribute->parent == 0)
                                                مشخصه والد
                                            @else
                                                @if($attribute->getParent){{ $attribute->getParent->title }}@endif
                                            @endif
                                        </td>
                                        <td><a href="">{{ $attribute->position }}</a></td>
                                        <td>
                                            @if ($attribute->status == 1)
                                                <button
                                                    wire:click="updateStatus('Attribute','attribute','مشخصه محصول','status',{{ $attribute->id }})"
                                                    type="submit" class="badge-success badge"
                                                    style="background-color: green">فعال
                                                </button>
                                            @else
                                                <button
                                                    wire:click="updateStatus('Attribute','attribute','مشخصه محصول','status',{{ $attribute->id }})"
                                                    type="submit" class="badge-danger badge"
                                                    style="background-color: red">
                                                    غیرفعال
                                                </button>
                                            @endif
                                        </td>
                                        <td>
                                            <a wire:click="deletedFieldAsModel('Attribute','attribute','مشخصه محصول','{{ $attribute->title }}','{{ $attribute->id }}')" type="submit"
                                                class="item-delete mlg-15" title="حذف"></a>
                                            <a href="{{ route('attribute.update', $attribute) }}" class="item-edit "
                                                title="ویرایش"></a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                            {{ $attributes->render() }}
                        @else
                            <div class="alert-warning alert">
                                در حال خواندن اطلاعات از دیتابیس ...
                            </div>


                        @endif


                    </table>
                </div>


            </div>
            <div class="col-4 bg-white">
                <p class="box__title">ایجاد مشخصه فنی برای دسته - {{ $this->category->title }}</p>
                <form wire:submit.prevent="categoryForm" enctype="multipart/form-data" role="form"
                    class="padding-10 categoryForm">

                    @include('errors.error')
                    <div class="form-group">
                        <input type="text" wire:model.lazy="attribute.title" placeholder="عنوان مشخصه "
                            class="form-control">
                    </div>


                    <div class="form-group">
                        <select wire:model.lazy="attribute.parent" name="parent" id="" class="form-control">
                            <option value="0">- مشخصه والد - </option>
                            @foreach ($attributeParents as $attributeParent)
                                <option value="{{ $attributeParent->id }}">{{ $attributeParent->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" wire:model.lazy="attribute.position" placeholder="موقعیت مشخصات کالا "
                            class="form-control">
                    </div>

                    <div class="form-group">
                        <div class="notificationGroup">
                            <input id="option4" type="checkbox" wire:model.lazy="attribute.status" name="status"
                                class="form-control">
                            <label for="option4">نمایش در مشخصات کالا:</label>
                        </div>
                    </div>

                    <button class="btn btn-brand">افزودن مشخصات کالا</button>
                </form>
            </div>
        </div>


    </div>


</div>
