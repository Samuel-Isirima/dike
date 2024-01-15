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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('tracking_code')->unique();
            $table->string('title');
            $table->string('description');
            $table->string('status');
            $table->string('mode');
            $table->string('sender_name');
            $table->string('sender_address');
            $table->string('sender_city');
            $table->string('sender_state');
            $table->string('sender_country');
            $table->string('sender_phone');
            $table->string('sender_email');
            $table->string('recipient_name');
            $table->string('recipient_address');
            $table->string('recipient_city');
            $table->string('recipient_state');
            $table->string('recipient_country');
            $table->string('recipient_phone');
            $table->string('type');
            $table->string('net_weight');
            $table->string('gross_weight');
            $table->string('quantity');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
