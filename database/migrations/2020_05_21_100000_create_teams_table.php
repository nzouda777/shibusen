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
        Schema::create('teams', function (Blueprint $table) {
            $table->id()->nullable();
            $table->string('name')->nullable();
            $table->foreignId('activity_id')->nullable();
            $table->string('branch')->nullable();
            $table->json('description')->nullable();
            $table->string('employee')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('adresse_line_1')->nullable();
            $table->string('adresse_line_2')->nullable();
            $table->string('registration_number')->nullable();
            $table->string('profile_photo_path')->nullable();
            $table->foreignId('user_id')->index()->nullable();
            $table->boolean('personal_team')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
