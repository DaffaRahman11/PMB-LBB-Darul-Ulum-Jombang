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
        Schema::create('registrations', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('registration_number')->unique();
            $table->foreign('student_id')->references('id')->on('students');
            $table->uuid('student_id')->index();
            $table->foreign('discount_id')->references('id')->on('discounts');
            $table->uuid('discount_id')->index();
            $table->foreign('payment_method_id')->references('id')->on('payment_methods');
            $table->uuid('payment_method_id')->index();
            $table->foreign('status_id')->references('id')->on('statuses');
            $table->uuid('status_id')->index();
            $table->decimal('total_price');
            $table->decimal('final_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
