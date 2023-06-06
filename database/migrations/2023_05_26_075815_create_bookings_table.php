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
        Schema::create('bookings', function (Blueprint $table) {
            
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->enum('class_type', ['YOGA', 'KARATE', 'DANCE', 'CARDIO', 'CROSSFIT', 'BOXING', 'BODY BUILDING', 'WEIGHT LIFTING', 'CYCLING', 'JIU JITSU']);
            $table->string('phone');
            $table->date('start_date');
            $table->date('end_date');
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
