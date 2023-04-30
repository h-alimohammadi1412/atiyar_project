@section('title','سطل زباله محصولات')
<div>
    <div class="main-content" wire:init="loadCategory">
        <div class="tab__box d-flex tab_items_flex">
            <div class="tab__items grow-1">
                <a class="tab__item " href="/admin/product">محصولات
                    </a>
                <a class="tab__item " href="/admin/color"> رنگ های محصولات</a>
                <a class="tab__item " href="/admin/gallery"> گالری تصاویر محصولات</a>
                <div class="d-none d-lg-inline-block">

                    |

                </div>
                <a class="tab__item">جستجو: </a>

                <a class="t-header-search">
                    <form action="" onclick="event.preventDefault();">
                        <input wire:model.debounce.1000="search"
                               type="text" class="text" placeholder="جستجوی محصول ...">
                    </form>
                </a>

            </div>
            <div class="tab__items">
                <a class="tab__item btn btn-danger"
                   href="{{route('product.trashed')}}" style="color: white;margin-left: 10px;">سطل زباله
                    ({{\App\Models\Product::onlyTrashed()->count()}})
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
                            <th>دسته بندی محصول</th>
                            <th>برند محصول</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        @if($readyToLoad)
                            <tbody>
                            @foreach($products as $product)
                                <tr role="row">
                                    <td><a href="">{{$product->id}}</a></td>
                                    <td>
                                        <img src="/storage/{{$product->img}}" alt="img" width="100px">
                                    </td>
                                    <td><a href="">{{$product->title}}</a></td>
                                    <td>
                                        @if($product->user){{ $product->user->name }}@endif
                                    </td>
                                    <td>
                                        {{ $product->category->title }}
                                    </td>
                                    <td>     @if($product->brand){{ $product->brand->name }}@endif</td>                                

                                    <td>
                                        <a wire:click="deleteCategory({{$product->id}})" type="submit"
                                           class="item-delete mlg-15" title="حذف"></a>
                                        <a wire:click="trashedProduct({{$product->id}})"
                                           class="item-li i-checkouts item-restore"></a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                            {{$products->render()}}
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
