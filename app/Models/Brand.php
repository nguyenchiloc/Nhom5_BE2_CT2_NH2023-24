<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    //Chỉ định tên bảng -> nhớ đổi tên
    public $table = "Brand";
    //khóa chính 
    public $primaryKey = 'brand_id';
    protected $fillable = ['brand_id', 'brand_name', 'brand_description', 'brand_status'];
    
    public function product(){
        return $this->hasMany(Product::class, 'brand_id', 'brand_id');
    }
}
