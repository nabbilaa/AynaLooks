<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'user_id',
        'nama_penerima',
        'nomor_whatsapp',
        'alamat_pengiriman',
        'grand_total',
        'status',
        'order_number',
    ];

    const STATUS_MENUNGGU = 'menunggu';
    const STATUS_DIPROSES = 'diproses';
    const STATUS_DIKIRIM = 'dikirim';
    const STATUS_COMPLETED = 'completed';
    const STATUS_DIBATALKAN = 'dibatalkan';

    public function items(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    protected function nomorWhatsapp(): Attribute
    {
        return Attribute::make(
            get: fn($value) => $this->formatPhoneNumber($value),
            set: fn($value) => $this->cleanPhoneNumber($value)
        );
    }

    protected function tanggalPesanan(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->created_at->format('d M Y H:i')
        );
    }

    private function cleanPhoneNumber($number)
    {
        return preg_replace('/[^0-9]/', '', $number);
    }

    private function formatPhoneNumber($number)
    {
        if (strlen($number) > 10) {
            return substr($number, 0, 4) . '-' .
                substr($number, 4, 4) . '-' .
                substr($number, 8);
        }
        return $number;
    }

    public function scopeStatus($query, $status)
    {
        return $query->where('status', $status);
    }

    public function scopeLatest($query)
    {
        return $query->orderBy('created_at', 'desc');
    }

    public function scopeSearch($query, $term)
    {
        return $query->where(function ($q) use ($term) {
            $q->where('nama_penerima', 'like', "%$term%")
                ->orWhere('nomor_whatsapp', 'like', "%$term%")
                ->orWhere('order_number', 'like', "%$term%");
        });
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($order) {
            if (empty($order->order_number)) {
                $order->order_number = self::generateOrderNumber();
            }
        });
    }

    private static function generateOrderNumber()
    {
        $prefix = 'ORD';
        $date = now()->format('Ymd');
        $latest = self::where('order_number', 'like', "{$prefix}{$date}%")
            ->latest()
            ->first();

        $sequence = $latest ? (int)substr($latest->order_number, -4) + 1 : 1;

        return "{$prefix}{$date}" . str_pad($sequence, 4, '0', STR_PAD_LEFT);
    }
}