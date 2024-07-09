<?php

use App\Models\InfoOption;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('portfolio_infos', function (Blueprint $table) {
            $table->foreignIdFor(InfoOption::class, 'value_id')->after('value')->nullable()->constrained('info_options');
            $table->json('value')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('portfolio_infos', function (Blueprint $table) {
            //
        });
    }
};
