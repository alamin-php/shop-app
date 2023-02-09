<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seal extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'qty',
        'price',
        'total_price',
        'seal_by'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
