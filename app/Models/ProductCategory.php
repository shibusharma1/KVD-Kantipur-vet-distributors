<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductCategory extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'banner_image',
        'icon',
        'meta_title',
        'meta_keyword',
        'meta_description',
        'show_in_menu',
        'show_in_home',
        'is_active',
        'sort_order'
    ];

    protected $table = "cl_product_categories";

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
