@section('title', 'سطل زباله تنوع قیمت محصولات')
<div>
    <div class="main-content" wire:init="loadCategory">
        <div class="tab__box d-flex tab_items_flex">
            <div class="tab__items grow-1">

                <a class="tab__item " href="/admin/product">محصولات</a>
                <div class="d-none d-lg-inline-block">

                    |

                </div>
                <a class="tab__item">جستجو: </a>

                <a class="t-header-search">
                    <form action="" onclick="event.preventDefault();">
                        <input wire:model.debounce.1000="search" type="text" class="text"
                            placeholder="جستجوی تنوع قیمت ...">
                    </form>
                </a>


            </div>
            <div class="tab__items">
                <a class="tab__item btn btn-danger" href="{{ route('productVendor.trashed') }}"
                    style="color: white;margin-left: 10px">سطل زباله
                    ({{ \App\Models\ProductSeller::onlyTrashed()->count() }})
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
                                <th>نام محصول</th>
                                <th>نام فروشنده</th>

                                <th>گارانتی</th>
                                <th>رنگ</th>
                                <th>قیمت</th>
                                <th>قیمت تخفیف خورده</th>
                                <th>زمان ارسال</th>
                                <th>عملیات</th>
                            </tr>
                        </thead>

                        @if ($readyToLoad)
                            <tbody>
                                @foreach ($productSellers as $productSeller)
                                    <tr role="row">
                                        <td><a href="">{{ $productSeller->id }}</a></td>
                                        <td>
                                            {{ $productSeller->product->title }}
                                        </td>
                                        <td>
                                            {{ $productSeller->vendor->name }}
                                        </td>
                                        <td>
                                            {{ $productSeller->warranty->name }}
                                        </td>
                                        <td>
                                                {{ $productSeller->color->name }}
                                        </td>
                                        <td>{{ $productSeller->price }}
                                            تومان</td>
                                        <td>{{ $productSeller->discount_price }}
                                            تومان</td>
                                        <td>{{ $productSeller->time }}
                                            روز کاری
                                        </td>

                                        <td>
                                            <a wire:click="deleteField('ProductSeller','productSeller','تنوع قیمت','name',{{ $productSeller->id }},'{{ $productSeller->product_id }})') "
                                                type="submit" class="item-delete mlg-15" title="حذف"></a>
                                            <a wire:click="trashedField('ProductSeller','productSeller','تنوع قیمت','name',{{ $productSeller->id }},'{{ $productSeller->product_id }})') "
                                                class="item-li i-checkouts item-restore"></a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                            {{ $productSellers->render() }}
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
