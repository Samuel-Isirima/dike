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
        Schema::create('transits', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInt('package_id');
            $table->string('mode');
            $table->string('date_arrived');
            $table->string('date_sent');
            $table->string('depature_city');
            $table->string('depature_state');
            $table->string('depature_country');
            $table->string('arrival_city');
            $table->string('arrival_state');
            $table->string('arrival_country');
            $table->string('status');
            $table->string('description');
            $table->string('title');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transits');
    }
};
