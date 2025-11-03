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
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('experience_type_id')->constrained()->onDelete('cascade');
            $table->string('box_type');  // diplome, recommendation
            $table->string('type');      // Certificate, Information, View Website
            $table->string('source');    // Alofuk Academy, Company name
            $table->string('title');     // Software Engineer, Front-End Developer
            $table->string('date_text'); // DEC 2023, APR 2019 - Until now
            $table->text('description');
            $table->string('link_path')->nullable();
            $table->boolean('has_popup')->default(false);
            $table->json('popup_data')->nullable();
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};
