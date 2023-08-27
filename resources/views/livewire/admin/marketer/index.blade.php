@section('title','بازاریابان')
<div>
    <div class="main-content" wire:init="loadCategory">
        <div class="tab__box">
            <div class="tab__items">
                <a class="tab__item is-active" href="/admin/marketer">بازاریابان</a>



                |
                <a class="tab__item">جستجو: </a>

                <a class="t-header-search">
                    <form action="" onclick="event.preventDefault();">
                        <input wire:model.debounce.1000="search"
                               type="text" class="text" placeholder="جستجوی بازاریاب ...">
                    </form>
                </a>


                <a class="tab__item btn btn-success"
                   href="{{route('marketer.create')}}"
                   style="color: white;float: left;margin-top: 10px;margin-left: 10px">افزودن بازاریاب
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
                            <th>لوگو بازاریاب</th>
                            <th>نام و نام خانوادگی</th>
                            <th>نوع بازاریاب</th>
                            <th>موبایل</th>
                            <th>ایمیل</th>
                            <th>سطح بازاریاب</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>

                        @if($readyToLoad)
                            <tbody>
                            @foreach($marketers as $marketer)
                                <tr role="row">
                                    <td><a href="">{{$marketer->id}}</a></td>
                                    <td>
                                        <img src="/storage/{{$marketer->logo}}" alt="img" width="100px">
                                    </td>
                                    <td><a href="">{{$marketer->name}}{{$marketer->lname}}</a></td>
                                    <td><a href="">{{$marketer->type_marketer}}</a></td>
                                    <td><a href="">{{$marketer->mobile}}</a></td>
                                    <td><a href="">{{$marketer->email}}</a></td>
                                    <td><a href="">{{$marketer->level_marketer}}</a></td>



                                    <td>
                                        <a wire:click="deleteCategory({{$marketer->id}})" type="submit"
                                           class="item-delete mlg-15" title="حذف"></a>
                                        <a href="{{route('marketer.update',$marketer)}}" class="item-edit mlg-15"
                                           title="ویرایش"></a>
                                        <br>


                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                            {{$marketers->render()}}
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
