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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('publishedAt')->nullable();
            $table->string('category')->nullable();
            $table->string('source')->nullable();
            $table->string('author')->nullable();
            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->longText('url')->nullable();
            $table->string('urlToImage')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
