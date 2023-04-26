@section('title','سطل زباله دسته ها')
<div>
    <div class="main-content" wire:init="loadCategory">
        <div class="tab__box d-flex tab_items_flex">
            <div class="tab__items grow-1">
                <a class="tab__item " href="/admin/category">دسته
                    ها</a>
                <a class="tab__item is-active"
                   href="/admin/subcategory">زیر دسته ها</a>
                <a class="tab__item {{Request::routeIs('childcategory.index') ? 'is-active': '' }}"
                   href="/admin/childcategory">دسته های کودک</a>

                |                <div class="d-none d-lg-inline-block">

                    |

                </div>        <a class="tab__item">جستجو: </a>

                <a class="t-header-search">
                    <form action="" onclick="event.preventDefault();">
                        <input wire:model.debounce.1000="search"
                               type="text" class="text" placeholder="جستجوی دسته ...">
                    </form>
                </a>

            </div>

            <div class="tab__items">
                <a class="tab__item btn btn-danger"
                   href="{{route('subcategory.trashed')}}
                       " style="color: white;fmargin-left: 10px">سطل زباله
                    ({{\App\Models\SubCategory::onlyTrashed()->count()}})
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
                            <th>آیدی</th>
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
                                    <td><a href="">{{$category->name}}</a></td>

                                    <td>
                                        <a wire:click="deleteCategory({{$category->id}})" type="submit"
                                           class="item-delete mlg-15" title="حذف"></a>
                                        <a wire:click="trashedCategory({{$category->id}})"
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
