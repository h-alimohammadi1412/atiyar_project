@extends('livewire.home.profile.profile_layout')

@section('title')
سفارشات-{{ auth()->user()->name }}
@endsection
@section('url_profile')
سفارشات
@endsection
@section('profile_content')
    <section class="col-lg-8">
        <!-- Toolbar-->
        <div class="d-flex justify-content-between align-items-center pt-lg-2 pb-4 pb-lg-5 mb-lg-3">
            <div class="d-flex align-items-center">
                <label class="d-none d-lg-block fs-sm text-light text-nowrap opacity-75 me-2" for="order-sort">مرتب
                    سازی:</label>
                <label class="d-lg-none fs-sm text-nowrap opacity-75 me-2" for="order-sort">مرتب سازی:</label>
                <select class="form-select" id="order-sort">
                    <option>همه </option>
                    <option>تحویل داده شده</option>
                    <option>درحال پردازش</option>
                    <option>تاخیر</option>
                    <option>کنسل</option>
                </select>
            </div><a class="btn btn-primary btn-sm d-none d-lg-inline-block" href="account-signin.html"><i
                    class="ci-sign-out me-2"></i>خروج</a>
        </div>
        <!-- Orders list-->
        <div class="table-responsive fs-md mb-4">
            <table class="table table-hover mb-0">
                <thead>
                    <tr>
                        <th>شماره</th>
                        <th>تاریخ خرید</th>
                        <th>وضعیت</th>
                        <th>جمع</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders  as $payment)
                        <tr>
                            <td class="py-3"><a class="nav-link-style fw-medium fs-sm" href="#order-details"
                                    data-bs-toggle="modal">12355</a></td>
                            <td class="py-3">11 شهریور 1401 </td>
                            <td class="py-3"><span class="badge bg-info m-0">درحال پردازش</span></td>
                            <td class="py-3">358.75</td>
                        </tr>
                    @endforeach
                    {{-- 
          <tr>
            <td class="py-3"><a class="nav-link-style fw-medium fs-sm" href="#order-details" data-bs-toggle="modal">12355</a></td>
            <td class="py-3">11 شهریور 1401 </td>
            <td class="py-3"><span class="badge bg-danger m-0">کنسل</span></td>
            <td class="py-3"><span>760.50</span></td>
          </tr>
          <tr>
            <td class="py-3"><a class="nav-link-style fw-medium fs-sm" href="#order-details" data-bs-toggle="modal">12355</a></td>
            <td class="py-3">11 شهریور 1401 </td>
            <td class="py-3"><span class="badge bg-warning m-0">تاخیر</span></td>
            <td class="py-3">1,264.00</td>
          </tr>
          <tr>
            <td class="py-3"><a class="nav-link-style fw-medium fs-sm" href="#order-details" data-bs-toggle="modal">12355</a></td>
            <td class="py-3">11 شهریور 1401 </td>
            <td class="py-3"><span class="badge bg-success m-0">تحویل داده شد</span></td>
            <td class="py-3">198.35</td>
          </tr>
          <tr>
            <td class="py-3"><a class="nav-link-style fw-medium fs-sm" href="#order-details" data-bs-toggle="modal">12355</a></td>
            <td class="py-3">11 شهریور 1401 </td>
            <td class="py-3"><span class="badge bg-success m-0">تحویل داده شد</span></td>
            <td class="py-3">2,133.90</td>
          </tr>
          <tr>
            <td class="py-3"><a class="nav-link-style fw-medium fs-sm" href="#order-details" data-bs-toggle="modal">12355</a></td>
            <td class="py-3">11 شهریور 1401 </td>
            <td class="py-3"><span class="badge bg-success m-0">تحویل داده شد</span></td>
            <td class="py-3">86.40</td>
          </tr> --}}
                </tbody>
            </table>
        </div>
        <!-- Pagination-->
        <nav class="d-flex justify-content-between pt-2" aria-label="Page navigation">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#"><i class="ci-arrow-left me-2"></i>قبلی</a></li>
            </ul>
            <ul class="pagination">
                <li class="page-item d-sm-none"><span class="page-link page-link-static">1 / 5</span></li>
                <li class="page-item active d-none d-sm-block" aria-current="page"><span class="page-link">1<span
                            class="visually-hidden">(جاری)</span></span></li>
                <li class="page-item d-none d-sm-block"><a class="page-link" href="#">2</a></li>
                <li class="page-item d-none d-sm-block"><a class="page-link" href="#">3</a></li>
                <li class="page-item d-none d-sm-block"><a class="page-link" href="#">4</a></li>
                <li class="page-item d-none d-sm-block"><a class="page-link" href="#">5</a></li>
            </ul>
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#" aria-label="Next">بعدی<i
                            class="ci-arrow-right ms-2"></i></a></li>
            </ul>
        </nav>
    </section>
@endsection
