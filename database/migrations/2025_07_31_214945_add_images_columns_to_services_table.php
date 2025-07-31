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
        Schema::table('services', function (Blueprint $table) {
            $table->string('top_right_image')->nullable();
            $table->string('top_left_image')->nullable();
            $table->string('bottom_right_image')->nullable();
            $table->string('bottom_middle_image')->nullable();
            $table->string('bottom_left_image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn([
                'top_right_image',
                'top_left_image',
                'bottom_right_image',
                'bottom_middle_image',
                'bottom_left_image',
            ]);
        });
    }
};
