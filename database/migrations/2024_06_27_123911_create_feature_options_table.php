<?php

use App\Models\Feature;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('feature_options', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Feature::class)->constrained()->cascadeOnDelete();
            $table->json('name');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feature_options');
    }
};
