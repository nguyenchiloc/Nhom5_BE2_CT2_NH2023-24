<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public $table = "Category";
    //khóa chính 
    public $primaryKey = 'category_id';
    protected $fillable = ['category_id', 'category_name'];
    public function product(){
        return $this->hasMany(Product::class, 'category_id', 'category_id');
    }
    public static function getCategoryName() 
    {
    	$category_name = [];
    	$categories = Category::all();
        foreach ($categories as $category) {
            $category_name[$category->category_id] = $category->category_name;
        } 
        return $category_name;
    }
}
