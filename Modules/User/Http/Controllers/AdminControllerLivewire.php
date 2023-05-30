<?php

namespace Modules\User\Http\Controllers;

use App\Models\Gallery;
use App\Models\Log;
use App\Models\Product;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class AdminControllerLivewire extends Component
{
    public $search;

    protected $queryString = ['search'];

    public $readyToLoad = false;
    protected $paginationTheme = 'bootstrap';

    public function loadCategory()
    {
        $this->readyToLoad = true;
    }

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
            alert()->success("وضعیت $title با موفقیت فعال شد.");

        } else {
            $modelSelect->update([$field => 0]);
            $this->createLog($title, 'admin/' . $route, $modelSelect->title, 'غیرفعال');
            alert()->success("وضعیت $title با موفقیت غیرفعال شد.");
        }

    }

    public function deleteField($model, $route, $title, $fieldName, $id, $setProductPrice_id = null)
    {

        $Model = "\\App\\Models\\" . $model;
        $modelSelect = $Model::withTrashed()->findOrFail($id);
        if ($modelSelect->img) {
            Storage::disk('public')->delete("storage", $modelSelect->img);
        }
        $modelSelect->forceDelete();
        $this->createLog($title, 'admin/' . $route, $modelSelect->$fieldName, 'حذف');
        if ($setProductPrice_id != null) {
            setProductPrice($setProductPrice_id);
        }
        alert()->success(" $title به صورت کامل از دیتابیس حذف شد.");
    }

    public function trashedField($model, $route, $title, $fieldName, $id, $setProductPrice_id = null)
    {
        $Model = "\\App\\Models\\" . $model;
        $modelSelect = $Model::withTrashed()->where('id', $id)->first();
        $modelSelect->restore();
        $this->createLog($title, 'admin/' . $route, $modelSelect->$fieldName, 'بازیابی');
        if ($setProductPrice_id != null) {
            setProductPrice($setProductPrice_id);
        }
        alert()->success(" $title با موفقیت بازیابی شد.");
    }

    public function createLog($modelName, $url, $title, $actionType)
    {
        Log::create([
            'user_id' => auth()->user()->id,
            'title' => "$actionType کردن $modelName" . '-' . $title,
            'url' => $url,
            'actionType' => $actionType
        ]);
        alert()->success("مشخصات $title مورد نظر با موفقیت $actionType شد.");
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

    public function deletedFieldAsModel($model, $route, $title, $fieldName, $id, $setProductPrice_id = null)
    {
        $Model = "\\App\\Models\\" . $model;
        $modelSelect = $Model::withTrashed()->findOrFail($id);
        $modelSelect->delete();
        $this->createLog($title, 'admin/' . $route, $modelSelect->$fieldName, 'حذف');
        if ($setProductPrice_id != null) {
            setProductPrice($setProductPrice_id);
        }
        alert()->success(" $title با موفقیت حذف شد.");


    }

}