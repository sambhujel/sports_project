<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('submits', function (Blueprint $table) {
            $table->id();
            $table->string('email')->nullable();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('date')->nullable();
            $table->string('time')->nullable();
            $table->string('sport')->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('submits');
        $table->dropForeign(['user_id']);
        $table->dropColumn('user_id');
    }
};
