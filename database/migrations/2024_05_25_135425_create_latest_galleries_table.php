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
        Schema::create('latest_galleries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('header_navigation_id')->nullable()->constrained('header_navigations')->onDelete('cascade');
            $table->string('main_page_name23');
            $table->timestamp('day')->useCurrent();
            $table->string('main_page_name25');
            $table->string('main_page_name81');
            $table->string('main_page_name59');
            $table->string('main_page_name60');
            $table->string('main_page_image89');
            $table->string('main_page_image90');
            $table->text('main_page_content')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('latest_galleries');
    }
};
