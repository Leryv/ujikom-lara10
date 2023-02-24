<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang', 20)->nullable()->default('text');
            $table->foreignId('brand_id')->unsigned();
            $table->foreignId('category_id')->unsigned();
            $table->foreignId('satuan_id')->unsigned();
            $table->string('no_reg');
            $table->string('harga');
            $table->foreignId('quantity')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};