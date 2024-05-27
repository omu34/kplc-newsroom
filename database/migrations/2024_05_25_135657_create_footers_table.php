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
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('header_navigation_id')->nullable()->constrained('header_navigations')->onDelete('cascade');
            $table->string('main_page_name30')->nullable();
            $table->string('main_page_name31')->nullable();
            $table->string('main_page_name32')->nullable();
            $table->string('main_page_name33')->nullable();
            $table->string('main_page_name34')->nullable();
            $table->string('main_page_name35')->nullable();
            $table->string('main_page_name36')->nullable();
            $table->string('main_page_name37')->nullable();
            $table->string('main_page_name38')->nullable();
            $table->string('main_page_name39')->nullable();
            $table->string('main_page_name40')->nullable();
            $table->string('main_page_name41')->nullable();
            $table->string('main_page_name42')->nullable();
            $table->string('main_page_name43')->nullable();
            $table->string('main_page_name44')->nullable();
            $table->string('main_page_name45')->nullable();
            $table->string('main_page_name46')->nullable();
            $table->string('main_page_name47')->nullable();
            $table->string('main_page_name48')->nullable();
            $table->string('main_page_name49')->nullable();
            $table->string('main_page_name50')->nullable();
            $table->string('main_page_name51')->nullable();
            $table->string('main_page_name52')->nullable();
            $table->string('main_page_name53')->nullable();
            $table->string('main_page_name54')->nullable();
            $table->string('main_page_name55')->nullable();
            $table->string('main_page_name56')->nullable();
            $table->string('main_page_name57')->nullable();
            $table->string('main_page_name58')->nullable();
            $table->string('main_page_name71')->nullable();
            $table->string('main_page_name72')->nullable();
            $table->text('main_page_content')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footers');
    }
};
