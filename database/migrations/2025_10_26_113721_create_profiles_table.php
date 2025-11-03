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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            // بيانات Top Section
            $table->string('avatar')->nullable();
            $table->string('post')->nullable();
            $table->string('cv_path')->nullable();

            // بيانات About
            $table->integer('age')->nullable();
            $table->string('residence')->nullable();
            $table->string('city')->nullable();

            // روابط التواصل الاجتماعي
            $table->string('whatsapp_url')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('instagram_url')->nullable();
            $table->string('linkedin_url')->nullable();

            // إعدادات الموقع
            $table->json('menu_items')->nullable();
            $table->string('default_language')->default('en');
            $table->json('brand_logos')->nullable();
            $table->string('copyright_text')->nullable();

            // إعدادات Preloader
            $table->string('preloader_name')->nullable();
            $table->string('preloader_job_title')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
