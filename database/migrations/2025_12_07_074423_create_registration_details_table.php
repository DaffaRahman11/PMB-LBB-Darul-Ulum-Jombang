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
        Schema::create('registration_details', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreign('registration_id')->references('id')->on('registrations');
            $table->uuid('registration_id')->index();
            $table->foreign('program_id')->references('id')->on('programs');
            $table->uuid('program_id')->index();
            $table->decimal('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registration_details');
    }
};
