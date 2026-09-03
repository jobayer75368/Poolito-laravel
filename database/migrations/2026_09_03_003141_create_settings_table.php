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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();

            // General Setting 
            $table->string('site_name');
            $table->string('hero_title');
            $table->text('footer_details')->nullable();
            $table->enum('opening_day_from', ['sunday', 'monday', 'tuesday', 'webnesday', 'thursday', 'friday', 'saturday'])->nullable();
            $table->enum('opening_day_to', ['sunday', 'monday', 'tuesday', 'webnesday', 'thursday', 'friday', 'saturday'])->nullable();
            $table->time('opening_time_from')->nullable();
            $table->time('opening_time_to')->nullable();
            $table->string('header_logo')->nullable();
            $table->string('footer_logo')->nullable();
            $table->string('page_banner')->nullable();

            // About Setting 
            $table->string('about_image1')->nullable();
            $table->string('about_image2')->nullable();
            $table->longText('about_description')->nullable();

            // Contact setting 
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->text('address')->nullable();
            $table->longText('location')->nullable();
            $table->string('facebook')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('instagram')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
