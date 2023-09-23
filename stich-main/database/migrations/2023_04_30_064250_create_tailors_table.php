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
        Schema::create('tailors', function (Blueprint $table) {
            $table->id('tailor_id');
            $table->unsignedBigInteger('user_id');
            $table->string('starting_price');
            $table->foreign('user_id')->references('user_id')->on('tb_user');
            $table->text('tailor_experience');
            $table->text('tailor_description')->default('I am a Tailor');
            $table->boolean('fix_cloth')->default(false);
            $table->boolean('custom_cloth')->default(false);
            $table->float('rating');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tailors');
    }
};
