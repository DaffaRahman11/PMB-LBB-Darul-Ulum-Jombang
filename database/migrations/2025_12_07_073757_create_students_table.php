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
        Schema::create('students', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nis')->unique();
            $table->string('name');
            $table->string('place_of_birth');
            $table->date('date_of_birth');
            $table->string('address');
            $table->string('school');
            $table->string('dormitory');
            $table->string('parent_name');
            $table->string('parent_phone');
            $table->enum('gender',['laki - laki', 'perempuan']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
