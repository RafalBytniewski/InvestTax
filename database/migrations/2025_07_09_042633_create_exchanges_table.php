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
        Schema::create('exchanges', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('type', ['broker', 'crypto_exchange']);
            $table->string('image');
            $table->string('url');
            $table->string('country')->nullable();
            $table->enum('currency', ['PLN', 'USD', 'EUR', 'GBP'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exchanges');
    }
};
