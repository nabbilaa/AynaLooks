<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeranjangTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('keranjang')) {
            Schema::create('keranjang', function (Blueprint $table) {
                $table->id();

                // Pastikan nama tabel referensi benar
                $table->unsignedBigInteger('user_id');
                $table->unsignedBigInteger('produk_id');

                $table->integer('jumlah')->default(1);
                $table->timestamps();

                // Tambahkan foreign key secara terpisah
                $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');

                $table->foreign('produk_id')
                    ->references('id')
                    ->on('produk') // Pastikan nama tabel benar
                    ->onDelete('cascade');

                $table->index(['user_id', 'produk_id']);
            });
        }
    }
}