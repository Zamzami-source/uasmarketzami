<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;
    protected $table = 'sales';

    protected $fillable = ['produk_id', 'nama_pembeli', 'jumlah'];


    function produk()
    {
        return $this->belongsTo(Produk::class, 'produk_id');
    }
}
