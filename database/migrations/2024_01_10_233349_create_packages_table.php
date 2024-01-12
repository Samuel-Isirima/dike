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
            $table->string('tracking_code');
            $table->string('type');
            $table->float('net_weight');
            $table->float('gross_weight');
            $table->string('sender_full_name');
            $table->string('sender_country');
            $table->string('sender_state');
            $table->string('sender_city');
            $table->string('sender_address');




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
