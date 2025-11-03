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
        Schema::create('price_plans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('title'); // Single, Premium, etc.
            $table->decimal('price', 8, 2);
            $table->string('price_display')->nullable(); // For custom HTML display
            $table->string('period')->default('mo');     // monthly
            $table->boolean('is_popular')->default(false);
            $table->string('link_url')->nullable();
            $table->text('note')->nullable();
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('price_plans');
    }
};
