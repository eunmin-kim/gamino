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
        Schema::create('market_menu', function (Blueprint $table) {
            $table->id('market_menu_id');
            $table->string('market_menu_name');
            $table->string('market_menu_price');
            $table->unsignedBigInteger('market_menu_img_id');
            $table->unsignedBigInteger('market_id');
            $table->foreign('market_menu_img_id')->references('market_menu_img_id')->on('market_menu_img');
            $table->foreign('market_id')->references('market_id')->on('market');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('market_menu');
    }
};
