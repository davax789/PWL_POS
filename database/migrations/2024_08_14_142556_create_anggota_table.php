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
        Schema::create('anggotas', function (Blueprint $table) {
            $table->id(); // Membuat kolom ID sebagai primary key secara otomatis
            $table->char('nip', 8)->unique(); // Panjang char tanpa tanda kutip
            $table->string('nama');
            $table->date('tanggal_lahir');
            $table->decimal('nilai', 3, 2)->default(1.00);
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggotas');
    }
};
