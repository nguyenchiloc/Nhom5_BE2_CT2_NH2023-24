<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table='Products';
    protected $primaryKey = 'product_id';
    protected $fillable = [
        'product_id',
        'product_name',
        'product_price',
        'product_qty',
        'category_id',
        'brand_id',
        'product_description',
        'product_status',
        'product_images_1',
        'product_images_2',
        'product_images_3',
    ];
    public function getProdReview()
    {
        return $this->hasMany(Review::class,'product_id','product_id');
    }
    //Một product_id sẽ có nhiều cart_id
    public function getProductCarts()
    {
        return $this->hasMany(Cart::class);
    }
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
