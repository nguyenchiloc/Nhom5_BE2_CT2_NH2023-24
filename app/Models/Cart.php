<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table='Cart';
    protected $primaryKey = 'cart_id';
    protected $fillable = [
        'cart_id',
        'quantity',
        'user_id',
        'product_id'
    ];
    //Một cart_id có 1 user id
    public function getCartUser()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    //Một cart_id có 1 product id
    public function getCartProduct()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
