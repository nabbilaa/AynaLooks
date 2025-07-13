<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('nama_penerima')->nullable();
            $table->string('nomor_whatsapp')->nullable();
            $table->text('alamat_pengiriman')->nullable();
        });
    }
   
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['nama_penerima', 'nomor_whatsapp', 'alamat_pengiriman']);
        });
    }
};