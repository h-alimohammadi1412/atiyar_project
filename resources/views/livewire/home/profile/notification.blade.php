@extends('livewire.home.profile.profile_layout')
@section('title')
بازدید های اخیر-{{ auth()->user()->name }}
@endsection
@section('url_profile')
بازدید های اخیر
@endsection
@section('profile_content')
<section class="col-lg-8">
    <!-- Toolbar-->
    <div class="d-flex justify-content-between align-items-center pt-lg-2 pb-4 pb-lg-5 mb-lg-3">
      <div class="d-flex align-items-center">
        <label class="d-none d-lg-block fs-sm text-light text-nowrap opacity-75 me-2" for="ticket-sort">مرتب سازی:</label>
        <label class="d-lg-none fs-sm text-nowrap opacity-75 me-2" for="ticket-sort">مرتب سازی:</label>
        <select class="form-select" id="ticket-sort">
          <option>همه </option>
            <option>باز</option>
        <option>بسته</option>
        </select>
      </div><a class="btn btn-primary btn-sm d-none d-lg-inline-block" href="account-signin.html"><i class="ci-sign-out me-2"></i>خروج</a>
    </div>
    <!-- Tickets list-->
    <div class="table-responsive fs-md mb-4">
      <table class="table table-hover mb-0">
        <thead>
          <tr>
          <th>موضوع تیکت</th>
          <th>تاریخ ارسال</th>
          <th>نوع</th>
          <th>اولویت</th>
          <th>وضعیت</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="py-3"><a class="nav-link-style fw-medium" href="account-single-ticket.html">تیکت جدید من</a></td>
            <td class="py-3">11/06/1401 | 11/06/1401</td>
            <td class="py-3">مشکل وب سایت</td>
            <td class="py-3"><span class="badge bg-warning m-0">بالا</span></td>
            <td class="py-3"><span class="badge bg-success m-0">باز</span></td>
          </tr>
          <tr>
            <td class="py-3"><a class="nav-link-style fw-medium" href="account-single-ticket.html">تیکت جدید من</a></td>
          <td class="py-3">11/06/1401 | 11/06/1401</td>
          <td class="py-3">شکایت</td>
          <td class="py-3"><span class="badge bg-info m-0">کم</span></td>
          <td class="py-3"><span class="badge bg-secondary m-0">بسته</span></td>
          </tr>
          <tr>
            <td class="py-3"><a class="nav-link-style fw-medium" href="account-single-ticket.html">تیکت جدید من</a></td>
           <td class="py-3">11/06/1401 | 11/06/1401</td>
          <td class="py-3">درخواست شریک</td>
          <td class="py-3"><span class="badge bg-danger m-0">بالا</span></td>
          <td class="py-3"><span class="badge bg-secondary m-0">بسته</span></td>
          </tr>
          <tr>
            <td class="py-3"><a class="nav-link-style fw-medium" href="account-single-ticket.html">تیکت جدید من</a></td>
        <td class="py-3">11/06/1401 | 11/06/1401</td>
          <td class="py-3">اطلاعات</td>
          <td class="py-3"><span class="badge bg-success m-0">کم</span></td>
          <td class="py-3"><span class="badge bg-secondary m-0">بسته</span></td>
          </tr>
        </tbody>
      </table>
    </div>
    {{-- <div class="text-end">
      <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#open-ticket">ارسال تیکت جدید</button> 
    </div> --}}
  </section>
@endsection
