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
        Schema::table('properties', function (Blueprint $table) {
            $table->unsignedBigInteger('city_id')->nullable()->after('address'); // Adjust the position as needed
            $table->unsignedBigInteger('sector_id')->nullable()->after('city_id');

            // If you have a foreign key relationship with cities and sectors tables
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('set null');
            $table->foreign('sector_id')->references('id')->on('sectors')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->dropForeign(['city_id']);
            $table->dropForeign(['sector_id']);
            $table->dropColumn('city_id');
            $table->dropColumn('sector_id');
        });
    }
};
