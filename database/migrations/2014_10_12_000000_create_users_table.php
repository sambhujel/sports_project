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
            $table->string('usertype')->default(0);
            $table->string('name');
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('price')->nullable();
            $table->string('sport')->nullable();
            $table->string('images')->nullable();
            $table->string('DOB')->nullable();
            $table->string('email')->unique();
            $table->string('time')->nullable();
            $table->string('tim')->nullable();
            $table->string('description')->nullable();
            $table->string('time1')->nullable();
            $table->string('time2')->nullable();
            $table->string('time3')->nullable();
            $table->string('time4')->nullable();
            $table->string('time5')->nullable();
            $table->string('time6')->nullable();
            $table->string('time7')->nullable();
            $table->string('time8')->nullable();
            $table->string('time9')->nullable();
            $table->string('times')->nullable();
            $table->string('times1')->nullable();
            $table->string('times2')->nullable();
            $table->string('times3')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
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
