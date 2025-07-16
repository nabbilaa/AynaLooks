<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Memastikan user harus login
    }

    public function index()
    {
        $cart = session()->get('cart', []);
        return view('landing.cart', compact('cart'));
    }

    public function checkoutProcess(Request $request)
    {
        try {
            \Log::info('Received Request: ', $request->all());

            $request->validate([
                'products' => 'required|array',
                'products.*.produk_id' => 'required|exists:produk,id',
                'products.*.jumlah' => 'required|integer|min:1',
                'grand_total' => 'required|numeric',
            ]);

            if (!Auth::check()) {
                return redirect()->route('login')->with('error', 'Anda harus login terlebih dahulu untuk checkout.');
            }

            $user = Auth::user();
            $customerName = $user->nama_penerima ?? $user->name; // Gunakan nama_penerima jika ada
            $customerPhone = $user->nomor_whatsapp ?? $user->phone; // Gunakan nomor_whatsapp jika ada

            $grandTotal = $request->grand_total;
            $itemsData = [];
            foreach ($request->products as $id => $item) {
                $produk = Produk::find($item['produk_id']);
                $subtotal = $produk->harga * $item['jumlah'];
                $itemsData[] = [
                    'produk_id' => $item['produk_id'],
                    'nama_produk' => $produk->nama_produk,
                    'jumlah' => $item['jumlah'],
                    'harga_satuan' => $produk->harga,
                    'subtotal' => $subtotal,
                ];
            }

            $pesanan = Order::create([
                'customer_name' => $customerName,
                'customer_phone' => $customerPhone,
                'total' => $grandTotal,
            ]);
            \Log::info('Pesanan Created: ', $pesanan->toArray());

            foreach ($itemsData as $item) {
                $pesananItem = OrderItem::create([
                    'pesanan_id' => $pesanan->id,
                    'produk_id' => $item['produk_id'],
                    'nama_produk' => $item['nama_produk'],
                    'jumlah' => $item['jumlah'],
                    'harga_satuan' => $item['harga_satuan'],
                    'subtotal' => $item['subtotal'],
                ]);
                \Log::info('PesananItem Created: ', $pesananItem->toArray());
            }

            session()->forget('cart');

            $message = "Halo, ada pesanan baru dari $customerName:\n\n*Detail Pesanan:*\n" . implode('\n', array_map(function ($item) {
                return "*{$item['nama_produk']}* - Jumlah: {$item['jumlah']} - Harga: Rp" . number_format($item['harga_satuan'], 0, ',', '.') . " - Total: Rp" . number_format($item['subtotal'], 0, ',', '.');
            }, $itemsData)) . "\n\n*Total Bayar:* Rp" . number_format($grandTotal, 0, ',', '.') . "\n\n*Nomor Telepon Pelanggan:* $customerPhone\n\n*Alamat Pengiriman:* {$user->alamat_pengiriman}\n\nMohon konfirmasi pesanan ini. Terima kasih!";
            $encodedMessage = urlencode($message);

            $whatsappUrl = "https://wa.me/62895325610300?text=$encodedMessage";
            return redirect()->away($whatsappUrl)->with('success', 'Pesanan telah dikirim ke penjual.')->with('redirect_to', route('admin.dashboard'));
        } catch (\Exception $e) {
            \Log::error('Error in checkoutProcess: ' . $e->getMessage());
            return back()->withErrors(['error' => 'Gagal menyimpan pesanan. Coba lagi.'])->withInput();
        }
    }

    public function addToCart(Request $request)
    {
        $request->validate([
            'produk_id' => 'required|exists:produk,id',
            'jumlah' => 'required|integer|min:1',
        ]);

        $produk = Produk::findOrFail($request->produk_id);

        $cart = session()->get('cart', []);

        if (isset($cart[$produk->id])) {
            $cart[$produk->id]['jumlah'] += $request->jumlah;
        } else {
            $cart[$produk->id] = [
                'nama' => $produk->nama_produk,
                'harga' => $produk->harga,
                'jumlah' => $request->jumlah,
                'gambar' => $produk->gambar,
                'produk_id' => $produk->id,
            ];
        }

        session()->put('cart', $cart);

        return redirect()->route('cart')->with('success', 'Produk berhasil ditambahkan ke keranjang!');
    }


}