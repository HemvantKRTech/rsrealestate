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
        Schema::table('settings', function (Blueprint $table) {
            $table->string('address')->nullable()->after('site_title');
            $table->string('email')->nullable()->after('address');
            $table->string('mobile')->nullable()->after('email');
            $table->string('calling_mobile')->nullable()->after('mobile');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->dropColumn(['address', 'email', 'mobile', 'calling_mobile']);
        });
    }
};
