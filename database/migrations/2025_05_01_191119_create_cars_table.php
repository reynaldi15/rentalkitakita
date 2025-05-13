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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('price');
            $table->string('image'); // path to the image file
            $table->json('features'); // list of features
            $table->string('type')->default('kecil');
            $table->string('waLink')->nullable(); // link ke WhatsApp
            $table->timestamps();
        });
    }
//     public function up(): void
// {
//     Schema::create('cars', function (Blueprint $table) {
//         $table->id();
//         $table->string('name');
//         $table->string('image')->nullable(); // path ke gambar
//         $table->integer('price');
//         $table->text('features');
//         $table->string('type')->default('kecil'); // bisa disimpan sebagai teks HTML atau JSON
//         $table->timestamps();
//     });
// }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
