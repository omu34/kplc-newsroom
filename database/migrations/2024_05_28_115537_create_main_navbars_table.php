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
        Schema::create('main_navbars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('header_navigation_id')->nullable()->constrained()->onDelete('cascade');

            $table->string('name');
            $table->string('link');
<<<<<<< HEAD:database/migrations/2024_05_29_051047_create_l_news_table.php
            $table->timestamp('day')->useCurrent();
            $table->string('likes');
            $table->string('views');
            $table->text('description');
            $table->boolean('is_active')->default(false);
            $table->string('video_path');
=======
>>>>>>> 1a9496aa8071221ef8a43250643bafac8ae6e19d:database/migrations/2024_05_28_115537_create_main_navbars_table.php
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main_navbars');
    }
};
