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
        Schema::create('home_contents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            // Banner Section
            $table->string('banner_title')->nullable();
            $table->string('banner_static_phrase')->nullable();
            $table->json('banner_slide_phrases')->nullable();
            $table->string('banner_end_phrase')->nullable();
            $table->string('banner_btn_text')->nullable();
            $table->string('banner_btn_link')->nullable();
            $table->string('banner_link_text')->nullable();
            $table->string('banner_link_url')->nullable();
            $table->string('banner_bg_image')->nullable();
            $table->string('banner_image')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_contents');
    }
};
