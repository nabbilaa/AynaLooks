<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function index()
    {
        $pesanan = Order::with( 'items')->latest()->paginate(10);
        return view('pesanan.index', compact('pesanan'));
    }

}
