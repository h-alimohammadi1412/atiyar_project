<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Sluggable;

    protected $fillable = [
        'img',
        'title',
        'link',
        'en_name',
        'status_product',
        'vendor_id',
        'color_id',
        'brand_id',
        'tags',
        'body',
        'description',
        'price',
        'discount_price',
        'weight',
        'view',
        'shipment',
        'original',
        'gift',
        'order_count',
        'special'
    ];


    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'link' => [
                'source' => 'title'
            ]
        ];
    }



    public function category1()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }


    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'seller_id', 'id');
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }
    public function color()
    {
        return $this->belongsTo(Color::class, 'color_id', 'id');
    }


    public function scopeWithFilters($query, $brands)
    {
        dd($query);
        return $query->when(count($brands), function ($query) use ($brands) {
            $query->whereIn('brand_id', $brands);
        });
    }
    public static function productStatus()
    {
        $array = [];
        $array[-3] = 'رد شده';
        $array[-2] = 'در انتظار بررسی';
        $array[-1] = 'توقف تولید';
        $array[0] = 'نا موجود';
        $array[1] = 'منتشر شده';
        return $array;
    }






}