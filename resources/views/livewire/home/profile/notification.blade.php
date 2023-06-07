@extends('livewire.home.profile.profile_layout')
@section('title')
    پیغام ها-{{ auth()->user()->name }}
@endsection
@section('url_profile')
    پیغام ها
@endsection
@section('profile_content')
    <section class="col-lg-8">
        <!-- Toolbar-->
        <div class="d-flex justify-content-between align-items-center pt-lg-2 pb-4 pb-lg-5 mb-lg-3">
            <div class="d-flex align-items-center">
            </div>
            <a class="btn btn-primary btn-sm d-none d-lg-inline-block" wire:click="deleteAllNotification({{ auth()->user()->id }})">پاک کردن همه</a>
        </div>
        <!-- Tickets list-->
        <div class="table-responsive fs-md mb-4">
            <table class="table table-hover mb-0">
                <thead>
                    <tr>
                        <th>موضوع پیغام</th>
                        <th>نام محصول</th>
                        <th>تصویر محصول</th>
                        <th style="width: 115px;">تاریخ ارسال</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($notifications as $notification)
                        <tr>
                            <td class="py-3"><span class="nav-link-style fw-medium">کالا موجود شد</span></td>
                            <td class="py-3"><a class="nav-link-style fw-medium"
                                    href="/product/at-{{ $notification->product->id }}/{{ $notification->product->link }}">{{ $notification->product->title }}</a>
                            </td>
                            <td class="py-3"><img width="50px" class="nav-link-style fw-medium"
                                    src="/storage/{{ $notification->product->img }}" /></td>
                            <td class="py-3">{{ jdate($notification->created_at)->format('%d / %m / %Y') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $notifications->render() }}
        </div>
    </section>
@endsection
