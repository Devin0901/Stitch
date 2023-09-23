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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id('transaction_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('tailor_id');
            $table->unsignedBigInteger('payment_method_id');
            $table->unsignedBigInteger('product_id');
            $table->foreign('user_id')->references('user_id')->on('tb_user');
            $table->foreign('tailor_id')->references('tailor_id')->on('tailors');
            $table->foreign('payment_method_id')->references('payment_method_id')->on('payment_methods');
            $table->foreign('product_id')->references('product_id')->on('tb_product');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
