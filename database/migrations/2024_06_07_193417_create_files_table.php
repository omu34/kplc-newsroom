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
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            // $table->timestamp('time')->useCurrent();
            // $table->text('content');
            // $table->string('name');
            // $table->string('mime_type');
            // $table->file('file');
            // $table->morphs('model'); // Polymorphic relationship with other models
            // $table->index('size');
            // $table->uuid('file_id');
            // $table->datetime('file_time');
            // $table->unsignedInteger('likes')->default(0);
            // $table->unsignedInteger('views')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('files');
    }
};
