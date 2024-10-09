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
        Schema::create('subproperty_types', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_type_id'); // Foreign key to property_types table
            $table->string('name')->unique(); // Name of the subproperty type
            $table->enum('status', ['active', 'inactive'])->default('active'); // Status
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('property_type_id')
                  ->references('id')
                  ->on('property_types')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subproperty_types');
    }
};
