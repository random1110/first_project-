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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone_number')->unique();
            $table->string('email')->nullable()->unique();
            $table->string('password');
            $table->date('birthday')->nullable();
            $table->string('address')->nullable();
            $table->tinyInteger('type')->default(1);
            $table->string('notes')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->foreignId('country_id');
            $table->foreignId('shop_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
