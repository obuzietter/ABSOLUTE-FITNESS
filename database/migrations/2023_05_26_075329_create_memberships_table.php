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
        Schema::create('memberships', function (Blueprint $table) {
            $table->id();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('package_name');
            $table->integer('duration');
            $table->decimal('price', 10, 2);
            $table->date('start_date');
            $table->enum('status', ['ACTIVE', 'INACTIVE'])->default('INACTIVE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('memberships');
    }
};
