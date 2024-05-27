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
        Schema::create('header_navigations', function (Blueprint $table) {
            $table->id();
            $table->string('main_page_name1');
            $table->string('main_page_name2');
            $table->string('main_page_name3');
            $table->string('main_page_name4');
            $table->string('main_page_name5');
            $table->string('main_page_name6');
            $table->string('main_page_name7');
            $table->string('main_page_name8');
            $table->string('main_page_name9');
            $table->string('main_page_name10');
            // $table->string('main_page_name11');
            $table->string('main_page_name12');
            $table->string('main_page_name19');
            $table->string('main_page_image82');
            $table->string('main_page_image83');
            $table->text('main_page_content')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('header_navigations');
    }
};
