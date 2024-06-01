<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->json('title');
            $table->json('description');
            $table->unsignedBigInteger('price_in_tl');
            $table->unsignedBigInteger('price_in_usd')->nullable();
            $table->unsignedBigInteger('price_in_eur')->nullable();
            $table->string('location');
            $table->string('brochure_path');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
