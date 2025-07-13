<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori_produk'; // ← beri tahu Laravel nama tabel sebenarnya

    protected $fillable = ['nama', 'gambar']; // ← field yang boleh diisi saat create/update
}
