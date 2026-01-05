<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Menentukan kolom yang boleh diisi
    protected $fillable = ['name'];

    // Relasi: Satu kategori bisa punya banyak produk
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}