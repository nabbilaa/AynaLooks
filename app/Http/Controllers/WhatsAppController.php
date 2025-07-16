<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhatsAppController extends Controller
{
    public function kirim(Request $request)
    {
        $name = $request->input('name');
        $subject = $request->input('subject');
        $message = $request->input('message');

        $text = "Halo, saya $name\n\nSubjek: $subject\n\nPesan:\n$message";
        $text = urlencode($text); // Encode supaya URL aman

        $nomor = '6287884770710'; // Ganti sesuai nomor WhatsApp kamu
        $waLink = "https://wa.me/$nomor?text=$text";

        return redirect()->away($waLink); // Redirect ke WhatsApp
    }
}
