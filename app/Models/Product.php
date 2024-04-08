<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function getCategoryProduct(){
        return $this->belongsTo(Category::class,'category_id');
    }
    public function getBrandProduct(){
        return $this->belongsTo(Brand::class,'brand_id');
    }
    public static function getProducts(){
        //gọi và trả về danh sách sản phẩm
        return Product::orderBy('product_id')->take('10')->get();
    }
    public static function getProductNews(){
        //gọi và trả về danh sách sản phẩm mới nhất
        return Product::orderBy('product_id', 'desc')->take('3')->get();
    }
}
