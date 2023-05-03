@section('title', 'سطل زباله مقدار مشخصات کالا ')
<div>
    <div class="main-content" wire:init="loadCategory">
        <div class="tab__box d-flex tab_items_flex" style="padding-bottom: 20px;">
            <div class="tab__items grow-1">            

            </div>
            <div class="tab__items">
                <a class="tab__item btn btn-danger" href="{{ route('attributeValue.trashed') }}"
                    style="color: white;margin-left: 10px">سطل زباله
                    ({{ \App\Models\AttributeValue::onlyTrashed()->count() }})
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
                                <th>محصول </th>
                                <th>مشخصه کالا</th>
                                <th>مقدار </th>
                                <th>عملیات</th>
                            </tr>
                        </thead>

                        @if ($readyToLoad)
                            <tbody>
                                @foreach ($attributeValues as $attributeValue)
                                    <tr role="row">
                                        <td><a href="">{{ $attributeValue->id }}</a></td>
                                        <td>
                                            {{ $attributeValue->product->title }}
                                        </td>
                                        <td>
                                            {{ $attributeValue->attribute->title }}
                                        </td>
                                        <td><a href="">{{ $attributeValue->value }}</a></td>
                                        <td>
                                            <a wire:click="deleteField('AttributeValue','attribute','مشخصه کالا','title',{{ $attributeValue->id }})"
                                                type="submit" class="item-delete mlg-15" title="حذف"></a>
                                            <a wire:click="trashedField('AttributeValue','attribute','مشخصه کالا','title',{{ $attributeValue->id }})"
                                                class="item-li i-checkouts item-restore"></a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                            {{ $attributeValues->render() }}
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
