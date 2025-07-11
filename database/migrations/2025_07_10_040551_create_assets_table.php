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
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('exchange_id')->constrained()->onDelete('cascade')->nullable();
            $table->string('symbol');
            $table->string('name');
            $table->enum('asset_type', ['stock', 'etf', 'cfd', 'crypto', 'futures', 'options', 'bond', 'forex', 'fund', 'commodity']);
            $table->enum('currency', ['USD', 'EUR', 'GBP', 'PLN']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assets');
    }
};
