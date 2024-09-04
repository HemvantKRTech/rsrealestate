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
            $table->string('dynFrm_property_for')->nullable();
            $table->string('dynFrm_property_category')->nullable();
            $table->string('dynFrm_area')->nullable();
            $table->string('dynFrm_unit_measure')->nullable();
            $table->decimal('dynFrm_price', 15, 2)->nullable();
            $table->string('dynFrm_price_measure')->default('INR');
            $table->string('dynFrm_property_facing')->nullable();
            $table->string('dynFrm_property_image_file')->nullable();
            $table->text('dynFrm_property_description')->nullable();
            $table->text('property_dynFrm_address')->nullable();
            $table->string('property_dynFrm_city')->nullable();
            $table->string('property_dynFrm_city_state_2')->nullable();
            $table->string('dynFrm_your_name')->nullable();
            $table->string('personal_dynFrm_email_id')->nullable();
            $table->string('personal_dynFrm_address')->nullable();
            $table->string('personal_dynFrm_city_state')->nullable();
            $table->string('personal_dynFrm_country_2')->nullable();
            $table->string('personal_dynFrm_phone_mobile')->nullable();
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
