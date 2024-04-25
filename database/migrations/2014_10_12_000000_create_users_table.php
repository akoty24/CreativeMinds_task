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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('mobile_number')->unique();
            $table->string('password');
            $table->string('verification_code')->nullable(); 
            $table->string('username');
            $table->text('location');
            $table->string('image')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->enum('role', ['user', 'delivery'])->default('user');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
