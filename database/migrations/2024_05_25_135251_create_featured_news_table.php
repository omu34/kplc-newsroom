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
        Schema::create('featured_news', function (Blueprint $table) {
            $table->id();
            $table->foreignId('header_navigation_id')->nullable()->constrained('header_navigations')->onDelete('cascade');
            $table->string('main_page_name12');
            $table->timestamp('day')->useCurrent();
            $table->string('main_page_name17');
            $table->string('main_page_name60');

            $table->string('main_page_name18');
            $table->string('main_page_name29');
            $table->string('main_page_image83');
            $table->string('main_page_image85');
            $table->text('main_page_content')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('featured_news');
    }
};