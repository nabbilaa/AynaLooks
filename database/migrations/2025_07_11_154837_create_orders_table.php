<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('nama_penerima');
            $table->string('nomor_whatsapp');
            $table->text('alamat_pengiriman');
            $table->decimal('grand_total', 10, 2);
            $table->string('status')->default('pending');
            $table->text('catatan')->nullable();
            $table->string('metode_pembayaran')->nullable();
            $table->string('order_number')->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}