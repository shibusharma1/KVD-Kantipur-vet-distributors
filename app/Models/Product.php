<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'cl_product_category_id',
        'name',
        'slug',
        'sku',
        'featured_image',
        'short_description',
        'description',
        'benefits_title',
        'benefits_description',
        'suitable_for',
        'product_type',
        'quality',
        'price',
        'external_link',
        'meta_title',
        'meta_keyword',
        'meta_description',
        'is_featured',
        'show_in_home',
        'is_active',
        'sort_order'
    ];

    protected $table = "cl_products";

    public function category()
    {
        return $this->belongsTo(ProductCategory::class,'cl_product_category_id');
    }
    

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

}
