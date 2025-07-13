<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Produk;

class LandingPageController extends Controller
{
    public function index(Request $request)
    {
        $kategori = Kategori::all();
        $produkQuery = Produk::with('kategori')->latest();

        if ($request->has('category_id')) {
            $produkQuery->where('kategori_id', $request->category_id);
        }

        $produk = $produkQuery->get();

        return view('landing.index', [
            'kategori' => $kategori,
            'produk' => $produk,
            'selected_kategori' => $request->category_id ?? null,
        ]);
    }

    public function about()
    {
        return view('landing.about');
    }

    public function contact()
    {
        return view('landing.contact');
    }

    public function category(Request $request)
    {
        $kategori = Kategori::all();
        $produkQuery = Produk::with('kategori')->latest();

        if ($request->has('category_id')) {
            $produkQuery->where('kategori_id', $request->category_id);
        }

        $produk = $produkQuery->get();

        return view('landing.category', [
            'kategori' => $kategori,
            'produk' => $produk,
            'selected_kategori' => $request->category_id ?? null,
        ]);
    }

    public function product(Request $request)
    {
        $produkQuery = Produk::with('kategori')->latest();

        if ($request->has('category_id')) {
            $produkQuery->where('kategori_id', $request->category_id);
        }

        $produk = $produkQuery->get();

        return view('landing.product', [
            'produk' => $produk
        ]);
    }
}