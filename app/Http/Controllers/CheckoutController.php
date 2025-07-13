<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CheckoutController extends Controller
{
    public function process(Request $request)
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login')->with('error', 'Silakan login untuk melanjutkan checkout.');
        }

        if (empty($user->nama_penerima) || empty($user->nomor_whatsapp) || empty($user->alamat_pengiriman)) {
            return redirect()->route('account.index')->with('error', 'Mohon lengkapi profil Anda (Nama Penerima, Nomor WhatsApp, dan Alamat Pengiriman) sebelum checkout.');
        }

        $validator = Validator::make($request->all(), [
            'products' => 'required|array',
            'products.*.produk_id' => 'required|integer',
            'products.*.nama' => 'required|string',
            'products.*.harga' => 'required|numeric|min:0',
            'products.*.jumlah' => 'required|integer|min:1',
            'products.*.gambar' => 'nullable|string',
            'grand_total' => 'required|numeric|min:0',
            'action' => 'required|string|in:whatsapp',
        ]);

        if ($validator->fails()) {
            return redirect()->route('cart')->withErrors($validator)->withInput();
        }

        $products = $request->input('products');
        $grandTotal = $request->input('grand_total');
        $action = $request->input('action');

        if ($action === 'whatsapp') {
            try {
                $order = Order::create([
                    'user_id' => $user->id,
                    'nama_penerima' => $user->nama_penerima,
                    'nomor_whatsapp' => $user->nomor_whatsapp,
                    'alamat_pengiriman' => $user->alamat_pengiriman,
                    'grand_total' => $grandTotal,
                    'status' => Order::STATUS_MENUNGGU,
                    'catatan' => $request->input('catatan', null),
                ]);

                foreach ($products as $id => $item) {
                    OrderItem::create([
                        'order_id' => $order->id,
                        'produk_id' => $item['produk_id'],
                        'nama' => $user->nama_penerima, // Isi nama pemesan dari user
                        'nama_produk' => $item['nama'],
                        'harga' => $item['harga'],
                        'jumlah' => $item['jumlah'],
                        'gambar' => $item['gambar'],
                        // subtotal dihitung otomatis di model
                    ]);
                }

                session()->forget('cart');

                $phoneNumber = '62895325610300';
                $message = "Pesanan Baru #{$order->order_number} dari {$user->nama_penerima}:\n";
                $message .= "Nomor WhatsApp: {$user->nomor_whatsapp}\n";
                $message .= "Alamat Pengiriman: {$user->alamat_pengiriman}\n";
                $message .= "Detail Pesanan:\n";
                foreach ($products as $id => $item) {
                    $message .= "- {$item['nama']} (x{$item['jumlah']}) Rp" . number_format($item['harga'] * $item['jumlah'], 0, ',', '.') . "\n";
                }
                $message .= "Total: Rp" . number_format($grandTotal, 0, ',', '.') . "\n";

                $encodedMessage = urlencode($message);
                $whatsappUrl = "https://wa.me/{$phoneNumber}?text={$encodedMessage}";

                \Log::info('Redirecting to WhatsApp: ' . $whatsappUrl);

                return redirect()->away($whatsappUrl)->with('success', 'Pesanan berhasil dibuat dan dikirim ke WhatsApp!');
            } catch (\Exception $e) {
                \Log::error('Checkout error: ' . $e->getMessage());
                return redirect()->route('cart')->with('error', 'Gagal menyimpan pesanan: ' . $e->getMessage());
            }
        }

        return redirect()->route('cart')->with('error', 'Aksi tidak valid.');
    }
}