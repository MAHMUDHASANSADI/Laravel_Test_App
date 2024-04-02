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
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('subscriptionTitle');
            $table->string('subscriptionIcon');
            $table->string('subscriptionPlan');
            $table->string('subscriptionHeading');
            $table->string('subscriptionPrice');
            $table->string('subscriptionFeatures');
            $table->string('subscriptionKey1');
            $table->string('subscriptionKey2');
            $table->string('subscriptionKey3');
            $table->string('subscriptionKey4');
            $table->string('subscriptionBusinessType');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscriptions');
    }
};
