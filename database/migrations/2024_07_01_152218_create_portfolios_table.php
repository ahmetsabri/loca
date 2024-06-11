<?php

use App\Models\Category;
use App\Models\District;
use App\Models\Province;
use App\Models\Town;
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
            $table->foreignIdFor(Category::class)->constrained()->cascadeOnDelete();
            $table->json('title');
            $table->json('description');

            $table->foreignIdFor(Province::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Town::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(District::class)->constrained()->cascadeOnDelete();

            $table->unsignedBigInteger('price_in_tl');
            $table->unsignedBigInteger('price_in_usd')->nullable();
            $table->unsignedBigInteger('price_in_eur')->nullable();
            $table->unsignedBigInteger('net')->default(1);
            $table->unsignedBigInteger('gross')->default(1);
            $table->string('location')->nullable();
            $table->string('brochure_path')->nullable();
            $table->string('promotion_url')->nullable();
            $table->boolean('status')->default(1);
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
