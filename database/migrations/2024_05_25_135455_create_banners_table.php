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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->foreignId('header_navigation_id')->nullable()->constrained('header_navigations')->onDelete('cascade');
            $table->string('main_page_name13');
            // $table->string('main_page_name14');
            $table->string('main_page_name15');
            $table->string('main_page_name16');
            $table->string('main_page_name17');
            $table->string('main_page_name18');
            $table->string('main_page_name19');
            $table->string('main_page_name20');
            // $table->string('main_page_name21')->nullable();
            // $table->string('main_page_name22')->nullable();
            $table->string('main_page_image84');
            $table->text('main_page_content')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
