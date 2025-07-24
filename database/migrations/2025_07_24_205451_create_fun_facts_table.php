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
        Schema::create('fun_facts', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_calls')->nullable()->default(0); // Translated from "Müşteri Bizi Aradı" (Customer Called Us)
            $table->integer('customers_hosted')->nullable()->default(0); // Translated from "Müşterimizi Ofislerimizde Ağırladık" (We Hosted Our Customer in Our Offices)
            $table->integer('digital_contracts_signed')->nullable()->default(0); // Translated from "Adet Dijital Sözleşme İmzalandı" (Number of Digital Contracts Signed)
            $table->integer('property_transactions_completed')->nullable()->default(0); // Translated from "Mülkün İşlemi Yapıldı" (Property Transaction Completed)
            $table->integer('properties_shown')->nullable()->default(0); // Translated from "Müşterimize Yer Gösterildi" (Property Shown to Customer)
            $table->integer('coffees_consumed')->nullable()->default(0); // Translated from "Kahve İçildi" (Coffee Consumed)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fun_facts');
    }
};
