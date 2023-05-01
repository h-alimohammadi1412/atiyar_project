<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Log;
use App\Models\Product;
use DB;
use Illuminate\Http\Request;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class AdminControllerLivewire extends Component
{
    public function uploadImage($dir)
    {
        $year = now()->year;
        $month = now()->month;
        $directory = $dir . "/$year/$month";
        $name = $this->img->getClientOriginalName();
        $this->img->storeAs($directory, $name);
        return "$directory/$name";
    }

    public function updateStatus($model, $route, $title, $field, $id)
    {
        $Model = "\\App\\Models\\" . $model;
        $modelSelect = $Model::find($id);
        if ($modelSelect->$field == 0) {
            $modelSelect->update([$field => 1]);
            $this->createLog($title, 'admin/' . $route, $modelSelect->title, 'فعال');
            $this->emit('toast', 'success', "وضعیت $title با موفقیت فعال شد.");
        } else {
            $modelSelect->update([$field => 0]);
            $this->createLog($title, 'admin/' . $route, $modelSelect->title, 'غیرفعال');
            $this->emit('toast', 'success', "وضعیت $title با موفقیت غیرفعال شد.");
        }

    }
    public function deleteField($model, $route, $title, $fieldName, $id)
    {
        $Model = "\\App\\Models\\" . $model;
        $modelSelect = $Model::withTrashed()->findOrFail($id);
        if ($modelSelect->img) {
            Storage::disk('public')->delete("storage", $modelSelect->img);
        }
        $modelSelect->forceDelete();
        $this->createLog($title, 'admin/' . $route, $modelSelect->$fieldName, 'حذف');
        $this->emit('toast', 'success', " $title به صورت کامل از دیتابیس حذف شد.");
    }

    public function trashedField($model, $route, $title, $fieldName, $id)
    {
        $Model = "\\App\\Models\\" . $model;
        $modelSelect = $Model::withTrashed()->where('id', $id)->first();
        $modelSelect->restore();
        $this->createLog($title, 'admin/' . $route, $modelSelect->$fieldName, 'بازیابی');

        $this->emit('toast', 'success', " $title با موفقیت بازیابی شد.");
    }
    public function createLog($modelName, $url, $title, $actionType)
    {
        Log::create([
            'user_id' => auth()->user()->id,
            'title' => "$actionType کردن $modelName" . '-' . $title,
            'url' => $url,
            'actionType' => $actionType
        ]);
    }
    public function galleryUpload($id, Request $request)
    {
        $product = Product::select(['id'])->where('id', $id)->firstOrFail();
        if ($product) {
            $count = DB::table('galleries')->where('product_id', $product->id)->count();
            $image_url = upload_file($request, 'file', 'products/gallerys', 'image_' . $id . rand(1, 100));
            if ($image_url != null) {
                $count++;
                DB::table('galleries')->insert([
                    'product_id' => $id,
                    'img' => $image_url,
                    'position' => $count,
                ]);
                return 1;
            } else
                return 0;
        } else {
            return 0;
        }
    }
    public function changeImagePosition($id, Request $request)
    {

        $i = 1;
        $ids = explode(',', $request->get('parameters'));
        foreach ($ids as $value) {
            $productGallery = Gallery::where(['id' => $value, 'product_id' => $id])->first();
            $productGallery->update(['position' => $i]);
            $i++;
        }
        return 'yes';
    }

}