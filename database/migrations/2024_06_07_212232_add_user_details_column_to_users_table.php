<?php

use App\Models\Department;
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
        Schema::table('users', function (Blueprint $table) {
            $table->after('email', function (Blueprint $table) {
                $table->foreignIdFor(Department::class)->nullable()->constrained();
                $table->string('phone')->nullable();
                $table->json('bio')->nullable();
                $table->string('facebook_url')->nullable();
                $table->string('instagram_url')->nullable();
                $table->string('address')->nullable();
                $table->json('experience')->nullable();
                $table->json('languages')->nullable();
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
