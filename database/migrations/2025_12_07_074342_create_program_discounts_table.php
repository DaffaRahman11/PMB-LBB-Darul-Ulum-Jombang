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
        Schema::create('program_discounts', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreign('program_id')->references('id')->on('programs');
            $table->uuid('program_id')->index();
            $table->foreign('discount_id')->references('id')->on('discounts');
            $table->uuid('discount_id')->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program_discounts');
    }
};
