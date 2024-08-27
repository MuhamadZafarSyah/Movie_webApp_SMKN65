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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('judul')->nullable();
            $table->string('genre')->nullable();
            $table->string('gambar')->nullable();
            $table->text('actor')->nullable();
            $table->text('link_trailer')->nullable();
            $table->text('link_movie')->nullable();
            $table->string('tahun')->nullable();
            $table->string('sutradara')->nullable();
            $table->text('deskripsi')->nullable();
            $table->text('rating')->nullable();
            $table->text('durasi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
