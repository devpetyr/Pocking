<?php

namespace App\Models;

use App\Models\ProductImageModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsModel extends Model
{
    protected $table= "products";
    use HasFactory;
    public function images_take1()
    {
        return $this->hasOne(ProductImageModel::class, 'product_id','id');
    }
    public function get_subcategory()
    {
        return $this->hasOne(SubCategoriesModel::class, 'id','sub_categories');
    }
}
