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
            $table->string('market_menu')->nullable();
            $table->string('market_menu_img')->nullable();
            $table->string('market_price')->nullable();
            $table->string('market_notice')->nullable();
            $table->boolean('is_market_online')->default(true);
            $table->string('market_location')->nullable();
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
