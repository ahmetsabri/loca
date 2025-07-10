<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyPropertiesTableNullableColumns extends Migration
{
    public function up()
    {
        Schema::table('flats', function (Blueprint $table) {
            $table->string('rooms')->nullable()->change();
            $table->unsignedInteger('bathroom_count')->nullable()->change();
            $table->json('description')->nullable()->change();
            $table->unsignedInteger('net')->nullable()->change();
            $table->unsignedInteger('gross')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('flats', function (Blueprint $table) {
            $table->string('rooms')->nullable(false)->change();
            $table->unsignedInteger('bathroom_count')->nullable(false)->change();
            $table->json('description')->nullable(true)->change(); // JSON is already nullable, so no change needed
            $table->unsignedInteger('net')->nullable(false)->change();
            $table->unsignedInteger('gross')->nullable(false)->change();
        });
    }
}
