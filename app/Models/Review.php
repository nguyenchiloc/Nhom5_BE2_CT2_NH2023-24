<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = "Review";   
    protected $primaryKey = 'review_id';
    protected $fillable = [
        'user_id',
        'product_id',
        'comment',
        'rating',
    ]; 
    
    public function getReviewUser()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function getReviewProd()
    {
        return $this->hasOne(Product::class,'product_id');
    }
}
