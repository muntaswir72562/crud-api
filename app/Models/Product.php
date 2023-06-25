<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = [
        
        'pName',
        'category',
        'supplier',
        'unit_price',
        'stock'
    ];
    public function transaction()
    {
        return $this->hasMany(transaction::class);
    }
}
