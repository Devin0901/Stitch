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
        Schema::create('tb_product', function (Blueprint $table) {
            $table->id('product_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('tailor_id');
            $table->foreign('user_id')->references('user_id')->on('tb_user');
            $table->foreign('tailor_id')->references('tailor_id')->on('tailors');
            $table->string('product_name');
            $table->string('productprice');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_product');
    }
};
