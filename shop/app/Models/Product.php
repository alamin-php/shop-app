<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'quality_id',
        'name',
        'qty',
        'size',
        'price',
        'created_by'
    ];

    public function quality()
    {
        return $this->belongsTo(Quality::class);
    }
}
