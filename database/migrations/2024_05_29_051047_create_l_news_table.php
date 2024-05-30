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
        Schema::create('l_news', function (Blueprint $table) {
            $table->id();
            $table->string('link');
            $table->timestamp('day')->useCurrent();
            $table->string('likes');
            $table->string('views');
            $table->text('description');
            $table->string('image_path');
            $table->string('video_path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('l_news');
    }
};
