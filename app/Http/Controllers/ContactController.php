<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request)
{
    $request->validate([
        'name' => 'required|string',
        'subject' => 'required|string',
        'message' => 'required|string',
    ]);

    $nomorTujuan = '62895325610300'; // Ganti dengan nomor WA admin kamu

    $text = "Halo, saya *{$request->name}* ingin menghubungi Anda.\n\n"
          . "*Subjek:* {$request->subject}\n"
          . "*Pesan:* {$request->message}";

    $whatsappLink = 'https://wa.me/' . $nomorTujuan . '?text=' . urlencode($text);

    return redirect()->away($whatsappLink);
}
}