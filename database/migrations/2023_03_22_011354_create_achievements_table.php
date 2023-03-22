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
        Schema::create('achievements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('level_id')->constrained();
            $table->foreignId('rank_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->string('name');
            $table->string('type');
            $table->string('location');
            $table->string('organizer');
            $table->string('description');
            $table->string('documentation_file')->nullable();
            $table->string('certificate_file')->nullable();
            $table->string('results_url')->nullable();
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('achievements');
    }
};
