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
            $table->decimal('hospital_distance', 8, 2)->nullable()->after('images');
            $table->decimal('atm_distance', 8, 2)->nullable()->after('hospital_distance');
            $table->decimal('railway_distance', 8, 2)->nullable()->after('atm_distance');
            $table->decimal('school_distance', 8, 2)->nullable()->after('railway_distance');
            $table->decimal('airport_distance', 8, 2)->nullable()->after('school_distance');
            $table->decimal('bank_distance', 8, 2)->nullable()->after('airport_distance');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('properties', function (Blueprint $table) {
          
            $table->dropColumn([
                'hospital_distance',
                'atm_distance',
                'railway_distance',
                'school_distance',
                'airport_distance',
                'bank_distance',
            ]);
        });
    }
};
