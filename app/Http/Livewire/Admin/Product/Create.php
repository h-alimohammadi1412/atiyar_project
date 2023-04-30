<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\Category;
use App\Models\Log;
use App\Models\Product;
use App\Models\SubCategory;
use DB;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Create extends Component
{
    use WithFileUploads;
    public $img;
    public $color_id=[];
    public Product $product;

    public function mount()
    {
        $this->product = new Product();
    }



    protected $rules = [
        'product.title' => 'required|min:3',
        'product.en_name' => 'required',
        'product.seller_id' => 'nullable',
        'product.category_id' => 'nullable',
        'product.status_product' => 'nullable',
        'product.color_id' => 'nullable',
        'product.brand_id' => 'required',
        'product.tags' => 'nullable',
        'product.body' => 'required',
        'img' => 'required',
        'product.description' => 'required',
        'product.weight' => 'nullable',
        'product.view' => 'nullable',
        'product.shipment' => 'nullable',
        'product.gift' => 'nullable',
        'product.original' => 'nullable',
    ];

    public function categoryForm()
    {

        $this->validate();
        if ($this->img) {
            $this->product->img = $this->uploadImage();
        }
        $this->product->save();
       
        Log::create([
            'user_id' => auth()->user()->id,
            'title' => 'افزودن محصول' . '-' . $this->product->title,
            'url' => 'admin/product',
            'actionType' => 'ایجاد'
        ]);
        alert()->success(' با موفقیت ایجاد شد.', 'محصول مورد نظر با موفقیت ایجاد شد.');
        return redirect(route('product.index'));
    }



    public function uploadImage()
    {
        $year = now()->year;
        $month = now()->month;
        $day = now()->day;
        $directory = "product/$year/$month/$day";
        $name = $this->img->getClientOriginalName();
        $this->img->storeAs($directory, $name);
        return "$directory/$name";
    }


    public function render()
    {
        return view('livewire.admin.product.create');
    }
}