<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $fillable = ['nama_produk', 'jenis_produk', 'stok', 'harga', 'deskripsi'];

    function sales()
    {
        return $this->hasMany(Sales::class);
    }

}
