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
        //
        Schema::table('users', function (Blueprint $table) {
            $table->string('name')->max(30)->change();
        });
        Schema::table('roles', function (Blueprint $table) {
            $table->string('role_name')->comment('Role Names: A - Admin, C - Contributor, S - Subscriber')->max(1)->change();
        });
        Schema::table('posts', function (Blueprint $table) {
            $table->text('content')->comment('Post Content')->change();
            $table->string('status')->comment('Post Status: D - Draft, P - Published, I - Inactive')->max(1)->change();
            $table->text('featured_image_url')->comment('Post Featured Image URL')->nullable()->change();
        });
        Schema::table('categories', function (Blueprint $table) {
            $table->string('category_name')->comment('Category Name')->max(30)->change();
        });
        Schema::table('tags', function (Blueprint $table) {
            $table->string('tag_name')->comment('Tag Name')->max(45)->change();
        });
        Schema::table('comments', function (Blueprint $table) {
            $table->text('comment_content')->comment('Comment Content')->change();
            $table->string('reviewer_name')->comment('Reviewer Name')->nullable()->change();
            $table->string('reviewer_email')->comment('Reviewer Email')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('users', function (Blueprint $table) {
            $table->string('name')->change();
        });
        Schema::table('roles', function (Blueprint $table) {
            $table->string('role_name')->comment('Role Names: Admin, Contributor, Subscriber')->change();
        });
        Schema::table('posts', function (Blueprint $table) {
            $table->string('content')->comment('Post Content')->change();
            $table->string('status')->comment('Post Status: D - Draft, P - Published, I - Inactive')->change();
            $table->string('featured_image_url')->comment('Post Featured Image URL')->change();
        });
        Schema::table('categories', function (Blueprint $table) {
            $table->string('category_name')->comment('Category Name')->change();
        });
        Schema::table('tags', function (Blueprint $table) {
            $table->string('tag_name')->comment('Tag Name')->change();
        });
        Schema::table('comments', function (Blueprint $table) {
            $table->string('comment_content')->comment('Comment Content')->change();
            $table->string('reviewer_name')->comment('Reviewer Name')->change();
            $table->string('reviewer_email')->comment('Reviewer Email')->change();
        });
    }
};
