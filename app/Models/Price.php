<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;
    public $table = "Price";
    //khóa chính 
    public $primaryKey = 'price_id';
    protected $fillable = ['price_id', 'price_name', 'type', 'price_to', 'price_from', 'price_status'];
}
