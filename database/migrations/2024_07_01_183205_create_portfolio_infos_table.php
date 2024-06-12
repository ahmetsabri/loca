<?php

use App\Models\Info;
use App\Models\Portfolio;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('portfolio_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Info::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Portfolio::class)->constrained()->cascadeOnDelete();
            $table->json('value');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolio_infos');
    }
};
