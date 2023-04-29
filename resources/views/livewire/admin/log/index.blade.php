@section('title', 'گزارشات سیستم')
<div>
    <div class="main-content" wire:init="loadCategory">
        <div class="tab__box">
            <div class="tab__items">
                <a class="tab__item is-active" href="/admin/log">گزارشات سیستم
                </a>

                <div class="d-none d-lg-inline-block">

                    |

                </div>
                <a class="tab__item">جستجو: </a>

                <a class="t-header-search">
                    <form action="" onclick="event.preventDefault();">
                        <input wire:model.debounce.1000="search" type="text" class="text"
                            placeholder="جستجوی دسته ...">
                    </form>
                </a>

            </div>
        </div>
        <div class="row">
            <div class="col-12 margin-left-10 margin-bottom-15 border-radius-3">

                <div class="table__box">
                    @if ($readyToLoad)

                        <table class="table">

                            <thead role="rowgroup">
                                <tr role="row" class="title-row">
                                    <th>آیدی</th>
                                    <th>کاربر</th>
                                    <th>عملیات</th>
                                    <th>تاریخ انجام</th>
                                    <th>وضعیت</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($logs as $log)
                                    <tr role="row">
                                        <td><a href="">{{ $log->id }}</a></td>
                                        <td>
                                                {{ \App\Models\User::where('id', $log->user_id)->first()->name }}
                                        </td>
                                        <td><a href="{{ $log->url }}">{{ $log->title }}</a></td>
                                        <td>{{\App\Models\Log::date($log->created_at,true)['time']}} - {{\App\Models\Log::date($log->created_at)['date']}}</td>
                                        <td><a href="">
                                                @if ($log->actionType == 'ایجاد')
                                                    <span style="background-color: green"
                                                        class="badge badge-success">ایجاد</span>
                                                @elseif($log->actionType == 'حذف')
                                                    <span style="background-color: red"
                                                        class="badge badge-danger ">حذف</span>
                                                @elseif($log->actionType == 'آپدیت')
                                                    <span style="background-color: #e29c5f"
                                                        class="badge badge-warning">آپدیت</span>
                                                @elseif($log->actionType == 'فعال')
                                                    <span style="background-color:#0dcaf0"
                                                        class="badge badge-info">فعال</span>
                                                @elseif($log->actionType == 'غیرفعال')
                                                    <span style="background-color:orange"
                                                        class="badge badge-primary">غیرفعال</span>
                                                @elseif($log->actionType == 'بازیابی')
                                                    <span style="background-color:#4dd073"
                                                        class="badge badge-warning">بازیابی</span>
                                                @endif
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                </div>

                {!! $logs->render() !!}
            @else
                <div class="alert-warning alert">
                    در حال خواندن اطلاعات از دیتابیس ...
                </div>


                @endif




            </div>
        </div>


    </div>

</div>
