<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class BillDetail extends Model
{
    use HasFactory; 
    protected $table = "BillDetail";
    protected $primaryKey = 'bill_detail_id';
    protected $fillable = [
        'bill_detail_id',
        'bill_id',
        'product_id',
        'quantily',
        'price',
    ];
    public function getBills()
    {
        return $this->belongsTo(Bill::class);
    }
}
