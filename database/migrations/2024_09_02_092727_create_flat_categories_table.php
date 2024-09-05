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
        Schema::create('flat_categories', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('sector_id')->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('sector_id'); 
            $table->foreign('sector_id')->references('id')->on('sectors'); 
            $table->string('type');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flat_categories');
    }
};
