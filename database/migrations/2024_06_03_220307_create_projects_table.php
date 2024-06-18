<?php

use App\Models\District;
use App\Models\Province;
use App\Models\Town;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->json('title');
            $table->json('description');
            $table->foreignIdFor(Province::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Town::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(District::class)->constrained()->cascadeOnDelete();
            $table->date('delivery_date');

            $table->unsignedBigInteger('price_in_tl');
            $table->unsignedBigInteger('price_in_usd')->nullable();
            $table->unsignedBigInteger('price_in_eur')->nullable();

            $table->string('brochure_path')->nullable();
            $table->string('promotion_url')->nullable();
            $table->string('location')->nullable();
            $table->json('payment_plan')->nullable();
            $table->json('extra_payment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
