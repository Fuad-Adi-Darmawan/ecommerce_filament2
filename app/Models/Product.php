<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Menentukan kolom yang boleh diisi
    protected $fillable = ['name', 'description', 'price', 'category_id'];

    // Relasi: Produk dimiliki oleh satu kategori
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}