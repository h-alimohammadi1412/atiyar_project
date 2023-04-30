<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
class AdminControllerLivewire extends Component
{
    public function uploadImage($dir)
    {
        $year = now()->year;
        $month = now()->month;
        $directory = $dir."/$year/$month";
        $name = $this->img->getClientOriginalName();
        $this->img->storeAs($directory, $name);
        return "$directory/$name";
    }

    public function updateStatus($model,$route,$title,$field ,$id)
    {
        $Model = "\\App\\Models\\".$model;
        $modelSelect = $Model::find($id);
        if ($modelSelect->$field == 0) {
            $modelSelect->update([$field => 1]);
            Log::create([
                'user_id' => auth()->user()->id,
                'title' => "فعال کردن وضعیت $title" . '-' . $modelSelect->title,
                'url'=> "admin/$route",
                'actionType' => 'فعال'
            ]);
            $this->emit('toast', 'success', "وضعیت $title با موفقیت فعال شد.");
        } else {
            $modelSelect->update([$field => 0]);
            Log::create([
                'user_id' => auth()->user()->id,
                'title' => "غیرفعال کردن وضعیت $title". '-' . $modelSelect->title,
                'url'=> "admin/$route",
                'actionType' => 'غیرفعال'
            ]);
            $this->emit('toast', 'success', "وضعیت $title با موفقیت غیرفعال شد.");
        }

    }
    public function deleteField($model,$route,$title,$fieldName ,$id)
    {
         $Model = "\\App\\Models\\".$model;
        $modelSelect =  $Model::withTrashed()->findOrFail($id);
        if ($modelSelect->img) {Storage::disk('public')->delete("storage",$modelSelect->img);}
        $modelSelect->forceDelete();
        Log::create([
            'user_id' => auth()->user()->id,
            'title' => "حذف کلی $title" .'-'. $modelSelect->$fieldName,
            'url'=> "admin/$route",
            'actionType' => 'حذف'
        ]);
        $this->emit('toast', 'success', " $title به صورت کامل از دیتابیس حذف شد.");
    }

    public function trashedField($model,$route,$title,$fieldName ,$id)
    {
         $Model = "\\App\\Models\\".$model;
        $modelSelect =  $Model::withTrashed()->where('id', $id)->first();
        $modelSelect->restore();
        Log::create([
            'user_id' => auth()->user()->id,
            'title' => 'بازیابی برند' .'-'. $modelSelect->$fieldName,
            'url'=> "admin/$route",
            'actionType' => 'بازیابی'
        ]);
        $this->emit('toast', 'success', " $title با موفقیت بازیابی شد.");
    }
}
