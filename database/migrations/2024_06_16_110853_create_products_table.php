<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('merk');
            $table->string('model');
            $table->integer('tahun');
            $table->integer('jarak');
            $table->string('judul', 100);
            $table->text('deskripsi');
            $table->integer('cc');
            $table->integer('harga');
            $table->boolean('nego')->default(false);
            $table->unsignedBigInteger('owner');
            $table->string('kontak', 15);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('owner')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
