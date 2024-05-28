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
        Schema::create('basic_banners', function (Blueprint $table) {
            $table->id();
            $table->foreignId('header_navigation_id')->constrained('header_navigations')->onDelete('cascade');
            $table->string('main_page_name13');
            $table->string('main_page_image84');
            $table->text('main_page_content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('basic_banners');
    }
};
