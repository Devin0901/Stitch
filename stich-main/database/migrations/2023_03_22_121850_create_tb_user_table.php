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
        Schema::create('tb_user', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('email');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('username')->unique();
            $table ->string('password')->default(null);
            $table->boolean('isTailor')->default(false);
            $table->boolean('isaplicant')->default(false);
            $table->string('gender');
            $table->string('description');
            $table->string('phone_number')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_user');
    }
};
