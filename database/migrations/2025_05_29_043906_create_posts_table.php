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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('Post Title');
            $table->string('content')->comment('Post Content');
            $table->string('slug')->comment('Post URL ID');
            $table->string('status')->comment('Post Status: D - Draft, P - Published, I - Inactive');
            $table->timestamp('publication_date')->comment('Post Published Timestamp')->nullable();
            $table->timestamp('last_modified_date')->comment('Post Modified Timestamp')->nullable();
            $table->string('featured_image_url')->comment('Post Featured Image URL');
            $table->integer('views_count')->comment('Post Total Views')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
