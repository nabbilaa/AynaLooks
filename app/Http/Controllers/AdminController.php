<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Produk;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        $jumlahKategori = Kategori::count();
        $jumlahProduk = Produk::count();
        $jumlahPesanan = Order::count();
        $pesananTerbaru = Order::latest()->take(5)->get();

        $pesananPerBulan = DB::table('orders')
            ->selectRaw('COUNT(*) as total, MONTHNAME(created_at) as bulan')
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw('MONTH(created_at), MONTHNAME(created_at)'))
            ->orderBy(DB::raw('MONTH(created_at)'))
            ->get();

        $bulan = $pesananPerBulan->pluck('bulan');
        $total = $pesananPerBulan->pluck('total');

        return view('admin.dashboard', compact(
            'jumlahKategori',
            'jumlahProduk',
            'jumlahPesanan',
            'pesananTerbaru',
            'bulan',
            'total'
        ));
    }

    public function index()
    {
        $pesanan = Order::with('items')->latest()->paginate(10);
        return view('pesanan.index', compact('pesanan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        return redirect()->route('admin.manage')->with('success', 'Admin baru berhasil ditambahkan.');
    }

}
