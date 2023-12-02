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
        Schema::create('order_waiting', function (Blueprint $table) {
            $table->id('waiting_id');
            $table->string('order_menu');
            $table->string('order_menu_price');
            $table->string('delivery_or_inhouse');
            $table->string('order_notice')->nullable();
            $table->boolean('is_order_finish')->default(0);
            $table->unsignedBigInteger('id');
            $table->unsignedBigInteger('markets_id');
            $table->foreign('id')->references('id')->on('users');
            $table->foreign('markets_id')->references('market_id')->on('market');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_waiting');
    }
};
