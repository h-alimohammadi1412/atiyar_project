@section('title','سطل زباله دسته ها')
<div>
    <div class="main-content" wire:init="loadCategory">
        <div class="tab__box d-flex justify-content-between">
            <div class="tab__items w-75">    
                <a class="t-header-search">
                    <form action="" onclick="event.preventDefault();">
                        <input wire:model.debounce.1000="search"
                               type="text" class="text" placeholder="جستجوی دسته ...">
                    </form>
                </a>


            </div>
            <div class="tab__items">

                <a  class="tab__item btn btn-danger "
                    href="{{route('category.trashed')}}" style="color: white;margin-left: 10px">سطل زباله
                    ({{\App\Models\Category::onlyTrashed()->count()}})
                </a>

            </div>

        </div>
        <div class="row">
            <div class="col-12 margin-left-10 margin-bottom-15 border-radius-3">
                @if($readyToLoad)

                <div class="table__box">

                    <table class="table">

                        <thead role="rowgroup">
                        <tr role="row" class="title-row">
                            <th>شناسه</th>
                            <th>تصویر دسته</th>
                            <th>عنوان دسته</th>
                            <th>نام دسته</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>

                            <tbody>
                            @foreach($categories as $category)
                                <tr role="row">
                                    <td><a href="">{{$category->id}}</a></td>
                                    <td>
                                        <img src="/storage/{{$category->img}}" alt="img" width="100px">
                                    </td>
                                    <td><a href="">{{$category->title}}</a></td>
                                    <td><a href="">{{$category->en_name}}</a></td>

                                    <td>
                                        <a wire:click="deleteField('Category','category','دسته','title',{{ $category->id }})" type="submit"
                                           class="item-delete mlg-15" title="حذف"></a>
                                        <a wire:click="trashedField('Category','category','دسته','title',{{ $category->id }})"
                                           class="item-li i-checkouts item-restore"></a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>

                    </table>
                </div>

                    {{$categories->render()}}
                        @else



                            <div class="alert-warning alert">
                                در حال خواندن اطلاعات از دیتابیس ...
                            </div>


                        @endif



            </div>

        </div>


    </div>

</div>
