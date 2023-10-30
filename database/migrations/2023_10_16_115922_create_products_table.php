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
            $table->string('name');
            $table->string('descriptions')->nullable();
            $table->string('image')->nullable();
            $table->foreignId('category_id');
            $table->integer('price');
            $table->integer('discount_percent')->default(0);
            $table->integer('tva')->default(0);
            $table->string('notes')->nullable();
            $table->foreignId('shop_id');
            $table->timestamps();
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
