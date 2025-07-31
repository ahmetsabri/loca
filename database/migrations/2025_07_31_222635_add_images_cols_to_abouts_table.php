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
        Schema::table('abouts', function (Blueprint $table) {
            $table->string('top_image')->nullable();
            $table->string('bottom_right_image')->nullable();
            $table->string('bottom_left_image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('abouts', function (Blueprint $table) {
            $table->dropColumn('top_image');
            $table->dropColumn('bottom_right_image');
            $table->dropColumn('bottom_left_image');
        });
    }
};
