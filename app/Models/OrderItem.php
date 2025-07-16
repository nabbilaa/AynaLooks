<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderItem extends Model
{
    use HasFactory;

    protected $table = 'order_items';
    
    protected $fillable = [
        'order_id',
        'produk_id',
        'nama', 
        'nama_produk',
        'harga',
        'jumlah',
        'subtotal',
    ];

    /**
     * Relationship with order
     */
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    /**
     * Relationship with product
     */
    public function product(): BelongsTo
    {
    return $this->belongsTo(Produk::class, 'produk_id');
    }

    /**
     * Calculate subtotal
     */
    public static function boot()
    {
        parent::boot();

        static::creating(function ($item) {
            $item->subtotal = $item->harga * $item->jumlah;
            
            // Jika nama_produk belum diset, ambil dari relasi produk
            if (empty($item->nama_produk) && $item->product) {
                $item->nama_produk = $item->product->nama_produk;
            }
        });

        static::updating(function ($item) {
            $item->subtotal = $item->harga * $item->jumlah;
        });
    }

    /**
     * Accessor for formatted price
     */
    public function getHargaFormattedAttribute()
    {
        return 'Rp' . number_format($this->harga, 0, ',', '.');
    }

    public function getSubtotalFormattedAttribute()
    {
        return 'Rp' . number_format($this->subtotal, 0, ',', '.');
    }
}