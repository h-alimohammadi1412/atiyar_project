@extends('livewire.home.profile.profile_layout')
@section('title')
پروفایل-{{ auth()->user()->name }}
@endsection
@section('url_profile')
پروفایل
@endsection
@section('profile_content')
<!-- آدرس جدید-->
<form class="needs-validation modal fade @if ($show) show @endif" @if ($show)
    style="display: block; background: rgba(0,0,0,.5);" @endif wire:submit.prevent='addressForm' id="add-address"
    tabindex="-1" novalidate>
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">آدرس جدیدی اضافه کنید</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"
                    wire:click="$set('show',false)"></button>
            </div>
            <div class="modal-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="row gx-4 gy-3">
                    <div class="col-sm-6">
                        <label class="form-label" for="address-fn">استان *</label>
                        <input class="form-control" type="text" id="address-fn" wire:model.lazy="address.state"
                            required>
                        <div class="invalid-feedback">لطفا استان خود را پر کنید</div>

                    </div>
                    <div class="col-sm-6">
                        <label class="form-label" for="address-ln1">شهر *</label>
                        <input class="form-control" type="text" id="address-ln1" wire:model.lazy="address.city"
                            required>
                        <div class="invalid-feedback">لطفا شهر خود را پر کنید</div>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label" for="address-company">محله *</label>
                        <input class="form-control" type="text" id="address-company" wire:model.lazy="address.mahale"
                            required>
                        <div class="invalid-feedback">لطفا شهر خود را پر کنید</div>
                    </div>
                    <div class="col-sm-12">
                        <label class="form-label" for="address-company1">نشانی پستی *</label>
                        <input class="form-control" type="text" id="address-company1" wire:model.lazy="address.address"
                            required>
                        <div class="invalid-feedback">لطفا شهر خود را پر کنید</div>
                    </div>
                    <div class="col-sm-4">
                        <label class="form-label" for="address-company2">پلاک *</label>
                        <input class="form-control" type="text" id="address-company2" wire:model.lazy="address.city"
                            required>
                        <div class="invalid-feedback">لطفا شهر خود را پر کنید</div>
                    </div>
                    <div class="col-sm-4">
                        <label class="form-label" for="address-company3">واحد</label>
                        <input class="form-control" type="text" id="address-company3" wire:model.lazy="address.vahed">
                    </div>
                    <div class="col-sm-4">
                        <label class="form-label" for="address-company4">کد پستی *</label>
                        <input class="form-control" type="text" id="address-company4"
                            wire:model.lazy="address.code_posti" required>
                        <div class="invalid-feedback">لطفا شهر خود را پر کنید</div>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label" for="address-city">نام گیرنده *</label>
                        <input class="form-control" type="text" id="address-city" wire:model.lazy="address.name"
                            required>
                        <div class="invalid-feedback">لطفاً شهر خود را پر کنید!</div>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label" for="address-line1">نام خانوادگی گیرنده *</label>
                        <input class="form-control" type="text" id="address-line1" wire:model.lazy="address.lname"
                            required>
                        <div class="invalid-feedback">لطفا آدرس خود را پر کنید</div>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label" for="address-line2">شماره موبایل *</label>
                        <input class="form-control" type="text" id="address-line2" wire:model.lazy="address.mobile"
                            required>
                        <div class="invalid-feedback">لطفا شهر خود را پر کنید</div>
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="address-primary"
                                wire:model.lazy="address.state">
                            <label class="form-check-label" for="address-primary">این آدرس را مقدماتی قرار
                                دهید</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal"
                    wire:click="$set('show',false)">بستن</button>
                <button class="btn btn-primary btn-shadow" type="submit">@if($edit) ویرایش کردن @else اضافه کردن
                    @endif</button>
            </div>
        </div>
    </div>
</form>
<section class="col-lg-8">
    <!-- Toolbar-->
    <div class="d-none d-lg-flex justify-content-between align-items-center pt-lg-3 pb-4 pb-lg-5 mb-lg-3">
        <h6 class="fs-base text-light mb-0">لیست آدرسهای ثبت شده شما:</h6>
        <div class="text-sm-end"><a class="btn btn-sm btn-primary" wire:click="openModal">ثبت آدرس
                جدید</a></div>
    </div>
    <!-- Addresses list-->
    <div class="table-responsive fs-md">
        <table class="table table-hover mb-0">
            <thead>
                <tr>
                    <th>نشانی</th>
                    <th>اقدامات</th>
                </tr>
            </thead>
            <tbody>


                @forelse ($addresses as $address)
                <tr>
                    <td class="py-3 align-middle">{{ $address->state }} - {{ $address->city }} -
                        {{ $address->address }}</td>
                    <td class="py-3 align-middle">
                        <a class="nav-link-style me-2" data-bs-toggle="tooltip" title=""
                            wire:click="editForm({{ $address }})" data-bs-original-title="ویرایش" aria-label="ویرایش"><i
                                class="ci-edit"></i>
                        </a>
                        <a class="nav-link-style text-danger" data-bs-toggle="tooltip"
                            wire:click="deleteAddress( {{ $address->id }})" title="" data-bs-original-title="حذف">
                            <div class="ci-trash"></div>
                        </a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4">شما هیچ آدرس ثبت شده ای ندارید.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</section>
@endsection
