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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('comment_content')->comment('Comment Content');
            $table->timestamp('comment_date')->comment('Comment Published Date');
            $table->string('reviewer_name')->comment('Reviewer Name');
            $table->string('reviewer_email')->comment('Reviewer Email');
            $table->boolean('is_hidden')->comment('Comment Hidden Status')->default(false);
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
