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
            $table->string('location');
            $table->string('organizer');
            $table->text('description');
            $table->string('documentation_file');
            $table->string('certificate_file');
            $table->string('idea_file');
            $table->string('poster_file');
            $table->date('start_date');
            $table->date('end_date');
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
