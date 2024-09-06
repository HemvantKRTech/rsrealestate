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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->integer('bedrooms')->nullable();
            $table->integer('bathrooms')->nullable();
            $table->string('furnishing')->nullable();
            $table->string('construction_status')->nullable();
            $table->string('listed_by')->nullable();
            $table->decimal('super_builtup_area', 10, 2);
            $table->decimal('carpet_area', 10, 2);
            $table->decimal('maintenance', 10, 2)->nullable();
            $table->integer('total_floors')->nullable();
            $table->integer('floor_no')->nullable();
            $table->integer('car_parking')->nullable();
            $table->string('facing')->nullable();
            $table->string('project_name')->nullable();
            $table->string('ad_title');
            $table->text('description');
            $table->text('address');
            $table->decimal('price', 15, 2);
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->enum('added_by', ['admin', 'user'])->default('admin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
