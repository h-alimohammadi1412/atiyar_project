@extends('livewire.home.profile.profile_layout')

@section('title')
کارت های هدیه-{{ auth()->user()->name }}
@endsection
@section('url_profile')
کارت های هدیه
@endsection
@section('profile_content')
<section class="col-lg-8">

    <!-- اضافه کردن کارت هدیه جدید-->
    <form class="needs-validation modal fade @if ($show) show @endif" @if ($show)
        style="display: block; background: rgba(0,0,0,.5);" @endif wire:submit.prevent='giftForm' tabindex="-1"
        novalidate>
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">ثبت کارت هدیه</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"
                        wire:click="$set('show',false)"></button>
                </div>
                <div class="modal-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="list-inline mb-0">
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="row gx-4 gy-3">
                        <div class="col-sm-12">
                            <label class="form-label" for="address-fn">سریال کارت را وارد کنید</label>
                            <input class="form-control" maxlength="13" type="text" id="address-fn"
                                wire:model.lazy="gift.newcard" required>
                            <div class="invalid-feedback">لطفا سریال کارت خود را پر کنید</div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal"
                        wire:click="$set('show',false)">بستن</button>
                    <button class="btn btn-primary btn-shadow" type="submit" wire:click="giftForm">
                        اضافه کردن
                    </button>
                </div>
            </div>
        </div>
    </form>
    <!-- Toolbar-->
    <div class="d-flex justify-content-between align-items-center pt-lg-2 pb-4 pb-lg-5 mb-lg-3">
        <div class="d-flex align-items-center">

        </div><a class="btn btn-primary btn-sm d-none d-lg-inline-block" wire:click="$set('show',true)">افزودن کارت
            هدیه</a>
    </div>
    <!-- Orders list-->
    <div class="table-responsive fs-md mb-4" wire:init="loadCategory">
        <table class="table table-hover mb-0">
            <thead>
                <tr>
                    <th>سریال کارت</th>
                    <th>تاریخ انقضاء</th>
                    <th>اعتبار اولیه</th>
                    <th>اعتبار باقی مانده</th>
                </tr>
            </thead>
            @if ($readyToLoad)
            <tbody>
                @forelse ($giftCarts as $giftCart)
                <tr>
                    <td class="py-3"><span>{{ $giftCart->code }}</span></td>
                    <td class="py-3">{{ jdate($giftCart->data_expire)->format(' %d / %m / %Y') }}</td>
                    <td class="py-3"><span class="">{{ number_format($giftCart->price) }}</span></td>
                    <td class="py-3">{{ number_format($giftCart->value_price) }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="4">شما هیچ کارت هدیه ای ندارید.</td>
                </tr>
                @endforelse



            </tbody>
            @else
            <div class="alert-warning alert">
                در حال خواندن اطلاعات از دیتابیس ...
            </div>


            @endif
        </table>

    </div>
</section>
@endsection