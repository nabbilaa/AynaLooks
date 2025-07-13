<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesananItemTable extends Migration
{
    public function up()
    {
        Schema::create('pesanan_item', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pesanan_id');
            $table->unsignedBigInteger('produk_id')->nullable(); // bisa nullable kalau produk dihapus
            $table->string('nama_produk'); // untuk menyimpan nama saat transaksi
            $table->integer('jumlah');
            $table->integer('harga_satuan');
            $table->integer('subtotal'); // jumlah * harga_satuan
            $table->timestamps();

            // Foreign key
            $table->foreign('pesanan_id')->references('id')->on('pesanan')->onDelete('cascade');
            $table->foreign('produk_id')->references('id')->on('produk')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pesanan_item');
    }
}
