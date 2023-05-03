@section('title','سطل زباله مشخصات کالا ')
<div>
    <div class="main-content" wire:init="loadCategory">
        <div class="tab__box d-flex tab_items_flex" style="padding-bottom: 20px;">
            <div class="tab__items grow-1">



            </div>
        <div class="tab__items">
            <a class="tab__item btn btn-danger"
               href="{{route('attribute.trashed')}}" style="color: white;margin-left: 10px">سطل زباله
                ({{\App\Models\Attribute::onlyTrashed()->count()}})
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
                            <th>عنوان </th>
                            <th>مشخصه والد</th>
                            <th>موقعیت</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>

                        @if($readyToLoad)
                            <tbody>
                            @foreach($attributes as $attribute)
                                <tr role="row">
                                    <td><a href="">{{ $attribute->id }}</a></td>
                                    <td><a href="">{{ $attribute->title }}</a></td>
                                    <td>
                                        @if ($attribute->parent == 0)
                                            مشخصه والد
                                        @else
                                            {{ $attribute->getParent->title }}
                                        @endif
                                    </td>
                                    <td><a href="">{{ $attribute->position }}</a></td>

                                    <td>
                                        <a wire:click="deleteField('attribute','attribute','مشخصه','title',{{ $attribute->id }})" type="submit"
                                           class="item-delete mlg-15" title="حذف"></a>
                                        <a wire:click="trashedField('attribute','attribute','مشخصه','title',{{ $attribute->id }})"
                                           class="item-li i-checkouts item-restore"></a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                            {{$attributes->render()}}
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
