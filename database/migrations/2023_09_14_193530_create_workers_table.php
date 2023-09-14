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
        Schema::create('workers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            //email
            $table->string('email')->unique();
            $table->string('password');
            $table->string('address');
            $table->date('date_of_birth');
            $table->string('phone_number');
            $table->enum('work_period',['full_time','part_time']);
            $table->enum('role', ['admin', 'employee'])->default('employee');
            $table->string('profile_picture')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workers');
    }
};
