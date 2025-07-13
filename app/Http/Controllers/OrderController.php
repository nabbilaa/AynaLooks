<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $status = $request->status;
        $search = $request->search;

        $orders = Order::with('items.product')
            ->when($status, fn($q) => $q->where('status', $status))
            ->when($search, fn($q) => $q->where('nama_penerima', 'like', "%{$search}%"))
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view('admin.orders.index', compact('orders'));
    }

    public function show(Order $order)
    {
        $order->load('items.product');
        return view('admin.orders.show', compact('order'));
    }

    public function edit(Order $order)
    {
        $statuses = [
            'menunggu'   => 'Menunggu',
            'diproses'   => 'Diproses',
            'dikirim'    => 'Dikirim',
            'selesai'    => 'Selesai',
            'dibatalkan' => 'Dibatalkan',
        ];

        return view('pesanan.edit', compact('order', 'statuses'));
    }

    public function update(Request $request, Order $order)
    {
        $validated = $request->validate([
            'status'   => 'required|in:menunggu,diproses,dikirim,selesai,dibatalkan',
            'no_resi'  => 'nullable|string|max:50',
            'catatan'  => 'nullable|string',
        ]);

        DB::transaction(function () use ($order, $validated) {
            $statusChanged = $order->status !== $validated['status'];

            $order->update($validated);

            if ($statusChanged) {
                switch ($validated['status']) {
                    case 'diproses':
                        $order->diproses_pada = now();
                        break;
                    case 'dikirim':
                        $order->dikirim_pada = now();
                        break;
                    case 'selesai':
                        $order->selesai_pada = now();
                        break;
                }
                $order->save();
            }
        });

        return redirect()->route('orders.show', $order)
            ->with('success', 'Status pesanan berhasil diperbarui.');
    }

    public function print(Order $order)
    {
        $order->load('items.product');
        return view('admin.orders.print', compact('order'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('landing.index');
    }
}
