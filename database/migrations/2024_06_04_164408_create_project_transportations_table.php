<?php

use App\Models\Project;
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
        Schema::create('project_transportations', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Project::class)->constrained()->cascadeOnDelete();
            $table->json('name');
            $table->integer('duration')->default(1);
            $table->integer('distance')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_transportations');
    }
};
