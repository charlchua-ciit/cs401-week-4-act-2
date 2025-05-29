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
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('file_name')->comment('File Name');
            $table->string('file_type')->comment('File Type');
            $table->integer('file_size')->comment('File Size')->nullable();
            $table->string('url')->comment('File URL');
            $table->timestamp('upload_date')->comment('Upload date');
            $table->string('description')->comment('Media Description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};
