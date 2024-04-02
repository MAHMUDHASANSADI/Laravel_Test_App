<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('about_sections', function (Blueprint $table) {
            $table->id();
            $table->string('introHeadings', 100);
            $table->string('introImages', 300);
            $table->string('introTexts', 300);
            $table->string('profileHeadings', 100);
            $table->string('profileImages', 300);
            $table->string('profileTexts', 100);
            $table->string('profileFacebook', 300);
            $table->string('profileLinkedIn', 300);
            $table->string('profileTwitter', 300);
            $table->string('faqsTitles', 100);
            $table->string('faqsImage', 100);
            $table->string('faqsQuestion1', 100);
            $table->string('faqsQuestion2', 100);
            $table->string('faqsQuestion3', 100);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_sections');
    }
};
