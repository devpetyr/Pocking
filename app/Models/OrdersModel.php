<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdersModel extends Model
{
    protected $table="orders";
    use HasFactory;
    public function get_product()
    {
        return $this->hasOne(ProductsModel::class, 'id','product_id');
    }
    public function get_user()
    {
        return $this->hasOne(User::class, 'id','user_id');
    }
}
