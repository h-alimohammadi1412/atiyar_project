@section('title', 'محصولات')
<div>
    <div class="main-content" wire:init="loadCategory">
        <div class="tab__box d-flex tab_items_flex">
            <div class="tab__items grow-1">
                <a class="tab__item is-active" href="/admin/product">محصولات</a>
                <a class="tab__item " href="/admin/color"> رنگ های محصولات</a>
                <a class="tab__item " href="/admin/gallery"> گالری تصاویر محصولات</a>
                <div class="d-none d-lg-inline-block">

                    |

                </div>
                <a class="tab__item">جستجو: </a>

                <a class="t-header-search">
                    <form action="" onclick="event.preventDefault();">
                        <input wire:model.debounce.1000="search" type="text" class="text"
                            placeholder="جستجوی محصول ...">
                    </form>
                </a>

            </div>
            <div class="tab__items">
                <a class="tab__item btn btn-danger" href="{{ route('product.trashed') }}"
                    style="color: white;margin-left: 10px;">سطل زباله
                    ({{ \App\Models\Product::onlyTrashed()->count() }})
                </a>
                <a class="tab__item btn btn-success" href="{{ route('product.create') }}"
                    style="color: white;margin-left: 10px">افزودن محصول
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-12 margin-left-10 margin-bottom-15 border-radius-3">

                <div class="table__box">
                    <table class="table">

                        <thead role="rowgroup">
                            <tr role="row" class="title-row">
                                <th>آیدی</th>
                                <th>تصویر محصول</th>
                                <th>عنوان محصول</th>
                                <th>فروشنده محصول</th>
                                <th>دسته های محصول</th>
                                <th>مشخصات کالا</th>
                                <th>گالری تصاویر محصول</th>
                                <th>تنوع قیمت محصول</th>
                                <th>وضعیت محصول</th>
                                <th>عملیات</th>
                            </tr>
                        </thead>

                        @if ($readyToLoad)
                            <tbody>
                                @foreach ($products as $product)
                                    <tr role="row">
                                        <td><a href="">{{ $product->id }}</a></td>
                                        <td>
                                            <img src="/storage/{{ $product->img }}" alt="img" width="100px">
                                        </td>
                                        <td><a href="">{{ $product->title }}</a></td>
                                        <td>
                                            @if($product->user){{ $product->user->name }}@endif
                                        </td>
                                        <td>
                                            {{ $product->category->title }}
                                            <br>
                                            -
                                            <br>
                                            برند:
                                            @if($product->brand){{ $product->brand->name }}@endif
                                        </td>
                                        <td>
                                            <a href="{{ route('product.attribute', $product) }}"
                                                style="margin-left: 10px;" class=" " title="مشخصات فنی">
                                                <img width: 20px; src="{{ asset('icons/icons/list-check.svg') }}"
                                                    alt="images">
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('product.gallery_image', $product) }}"
                                                style="margin-left: 10px;" class=" " title="گالری تصاویر">
                                                <img width: 20px; src="{{ asset('icons/icons/images.svg') }}"
                                                    alt="images">
                                            </a>

                                        </td>
                                        <td>
                                            <a href="{{ route('product.productVendor', $product) }}"
                                                style="margin-left: 6px" class="" title="تنوع قیمت">
                                                <img width: 20px; src="{{ asset('icons/icons/grid.svg') }}"
                                                    alt="grid">
                                            </a>
                                        </td>

                                        <td>
                                            @if ($product->status_product == 1)
                                                <button wire:click="updateStatus('Product','product','محصول','status_product',{{ $product->id }})"
                                                    type="submit" class="badge-success badge"
                                                    style="background-color: green">فعال
                                                </button>
                                            @else
                                                <button wire:click="updateStatus('Product','product','محصول','status_product',{{ $product->id }})"
                                                    type="submit" class="badge-danger badge"
                                                    style="background-color: red">
                                                    غیرفعال
                                                </button>
                                            @endif
                                        </td>
                                        <td>
                                            <a wire:click="deleteCategory({{ $product->id }})" type="submit"
                                                class="item-delete mlg-15" title="حذف"></a>
                                            <a href="{{ route('product.update', $product) }}" class="item-edit mlg-15"
                                                title="ویرایش"></a>
                                            <br>


                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                            {{ $products->render() }}
                        @else
                            <div class="alert-warning alert">
                                در حال خواندن اطلاعات از دیتابیس ...
                            </div>


                        @endif


                    </table>
                </div>


            </div>
        </div>


    </div>

</div>
