<?php

     namespace App\Http\Controllers;

     use Illuminate\Http\Request;
     use Illuminate\Support\Facades\Auth;
     use Illuminate\Support\Facades\Validator;

     class AccountController extends Controller
     {
         public function __construct()
         {
             $this->middleware('auth');
         }

         public function index()
         {
             $user = Auth::user();
             if (!$user) {
                 return redirect()->route('login')->with('error', 'Silakan login untuk melihat profil Anda.');
             }
             return view('account.index', compact('user'));
         }

         public function orders()
         {
             $user = Auth::user();
             if (!$user) {
                 return redirect()->route('login')->with('error', 'Silakan login untuk melihat pesanan Anda.');
             }
             $orders = $user->orders ?? [];
             return view('account.orders', compact('user', 'orders'));
         }

         public function show()
         {
             $user = Auth::user();
             if (!$user) {
                 return redirect()->route('login')->with('error', 'Silakan login untuk melihat profil Anda.');
             }
             return view('account.index', compact('user'));
         }

         public function update(Request $request)
         {
             $user = Auth::user();
             if (!$user) {
                 return redirect()->route('login')->with('error', 'Silakan login untuk memperbarui profil Anda.');
             }

             $validator = Validator::make($request->all(), [
                 'nama_penerima' => 'required|string|max:255',
                 'nomor_whatsapp' => 'required|string|max:20',
                 'alamat_pengiriman' => 'required|string|max:500',
             ], [
                 'nama_penerima.required' => 'Nama Penerima wajib diisi.',
                 'nomor_whatsapp.required' => 'Nomor WhatsApp wajib diisi.',
                 'alamat_pengiriman.required' => 'Alamat Pengiriman wajib diisi.',
                 'nama_penerima.max' => 'Nama Penerima tidak boleh lebih dari 255 karakter.',
                 'nomor_whatsapp.max' => 'Nomor WhatsApp tidak boleh lebih dari 20 karakter.',
                 'alamat_pengiriman.max' => 'Alamat Pengiriman tidak boleh lebih dari 500 karakter.',
             ]);

             if ($validator->fails()) {
                 return redirect()->back()->withErrors($validator)->withInput();
             }

             $user->update([
                 'nama_penerima' => $request->nama_penerima,
                 'nomor_whatsapp' => $request->nomor_whatsapp,
                 'alamat_pengiriman' => $request->alamat_pengiriman,
             ]);

             return redirect()->route('account.index')->with('success', 'Profil berhasil diperbarui!');
         }
     }