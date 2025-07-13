<?php

namespace App\Services;

use App\Models\Order;

class WhatsAppService
{
    // Method TIDAK static
    public function sendOrderNotification(Order $order, array $data)
    {
        $phone = preg_replace('/^\+62|^0/', '62', $order->customer_phone);
        $message = $this->buildOrderMessage($order, $data); // Perhatikan $this->
        $encodedMessage = urlencode($message);
        
        $whatsappUrl = "https://wa.me/{$phone}?text={$encodedMessage}";
        
        return redirect()->away($whatsappUrl);
    }

    // Method helper juga TIDAK static
    protected function buildOrderMessage(Order $order, array $data)
    {
        $message = "Halo {$order->customer_name},\n\n";
        $message .= "Terima kasih atas pesanan Anda!\n\n";
        $message .= "Detail Pesanan:\n";
        $message .= "No. Order: {$order->id}\n";
        $message .= "Total: Rp" . number_format($order->total_amount, 0, ',', '.') . "\n\n";
        
        $message .= "Items:\n";
        foreach ($data['products'] as $id => $item) {
            $message .= "- {$item['nama']} (Rp" . number_format($item['harga'], 0, ',', '.') . ") x {$item['jumlah']}\n";
        }
        
        $message .= "\nAlamat Pengiriman:\n";
        $message .= $order->customer_address . "\n\n";
        $message .= "Silakan konfirmasi pesanan ini. Terima kasih!";
        
        return $message;
    }
}