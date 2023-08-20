<?php

namespace App\Http\Livewire\Seller\Dashboard;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\Seller;
use Livewire\Component;
use Livewire\WithFileUploads;

class UploadDocument extends AdminControllerLivewire
{
    use WithFileUploads;
    public $certificateImg;
    public $nationalCardImg;
    public $personalPictureImg;
    public $licenseImg;
    public Seller $seller;
    public function mount()
    {
        $this->seller = Seller::where('user_id', auth()->user()->id)->first();
        // dd($this->seller);
    }

    // public function uploadImage($dir,$model = 'img')

    // {
    //     $year = now()->year;

    //     $month = now()->month;

    //     $directory = $dir . "/$year/$month";

    //     $name = $this->$model->getClientOriginalName();

    //     $this->$model->storeAs($directory, $name);

    //     return "$directory/$name";
    // }
    public function storeCertificateImg()
    {
        if (!is_null($this->certificateImg)) {
            $this->seller->certificate_img = $this->uploadImage('document_seller','certificateImg');
            $this->seller->save();
            $this->helperAlert('success', 'اطلاعات با موفقیت ثبت شد.');
        } else {
            $this->helperAlert('warning', 'خطا در ذخیره تصویر، لطفا دوباره امتحان کنید.');
        }
    }
    public function storeNationalCardImg()
    {
        if (!is_null($this->nationalCardImg)) {
            $this->seller->nationalCard_img = $this->uploadImage('document_seller','nationalCardImg');
            $this->seller->save();
            $this->helperAlert('success', 'اطلاعات با موفقیت ثبت شد.');
        } else {
            $this->helperAlert('warning', 'خطا در ذخیره تصویر، لطفا دوباره امتحان کنید.');
        }
    }
    public function storePersonalPictureImg()
    {
        if (!is_null($this->personalPictureImg)) {
            $this->seller->personalPicture_img = $this->uploadImage('document_seller','personalPictureImg');
            $this->seller->save();
            $this->helperAlert('success', 'اطلاعات با موفقیت ثبت شد.');
        } else {
            $this->helperAlert('warning', 'خطا در ذخیره تصویر، لطفا دوباره امتحان کنید.');
        }
    }
    public function storeLicenseImg()
    {
        if (!is_null($this->licenseImg)) {
            $this->seller->license_img = $this->uploadImage('document_seller','licenseImg');
            $this->seller->save();
            $this->helperAlert('success', 'اطلاعات با موفقیت ثبت شد.');
        } else {
            $this->helperAlert('warning', 'خطا در ذخیره تصویر، لطفا دوباره امتحان کنید.');
        }
    }
    public function render()
    {
        return view('livewire.seller.dashboard.upload-document')->layout('layouts.home1');
    }
}
