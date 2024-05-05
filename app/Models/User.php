<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = "Users";
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'user_id',
        'full_name',
        'email',
        'password',
        'phone',
        'gender',
        'date',
        'address',
        'avatar',
        'level_id',
        'status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    //Một user_id sẽ có nhiều cart_id
    public function getUserCarts()
    {
        return $this->hasMany(Cart::class, 'user_id', 'user_id')->where('cart_status','=','save');
    }
    public function getUserBill()
    {
        return $this->hasMany(Bill::class, 'user_id', 'user_id');
    }
    public function getUserRv()
    {
        return $this->hasMany(Review::class, 'user_id', 'user_id');
    }
}