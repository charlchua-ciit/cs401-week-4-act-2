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
            $table->timestamp('registration_date')->comment("Registration Date")->default(now());
            $table->timestamp('last_login_date')->comment("Last Login Date")->nullable();
            $table->dropTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('registration_date');
            $table->dropColumn('last_login_date');
            $table->timestamps();
        });
    }
};
