<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('market', function (Blueprint $table) {
            $table->id('market_id');
            $table->string('market_name');
            $table->string('market_menu');
            $table->string('market_menu_img');
            $table->string('market_price');
            $table->string('market_notice');
            $table->boolean('is_market_online');
            $table->string('market_location');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('market');
    }
};
