<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'carts'; // Nama tabel
    protected $fillable = ['nama', 'nomor_wa']; // Kolom yang bisa diisi

    public function items()
    {
        return $this->hasMany(CartItem::class);
    }
}
