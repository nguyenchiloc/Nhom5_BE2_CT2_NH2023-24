<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $table = "Bill";
    protected $primaryKey = 'bill_id';
    protected $fillable = [
        'bill_id',
        'user_id',
        'total_qty',
        'total_amount',
        'date_invoice',
        'status',
        'note',
    ];
    public function getBillUser()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function getBillDetail()
    {
        return $this->hasMany(BillDetail::class);
    }
}
