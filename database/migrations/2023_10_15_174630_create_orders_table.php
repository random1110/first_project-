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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cart_id');
            $table->foreignId('user_id');
            $table->string('driver_name');
            $table->text('addrees')->nullable();
            $table->double('longitude')->nullable();
            $table->double('latitude')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->string('notes')->nullable();
            $table->string('rejection_notes')->nullable();
            $table->foreignId('shop_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
