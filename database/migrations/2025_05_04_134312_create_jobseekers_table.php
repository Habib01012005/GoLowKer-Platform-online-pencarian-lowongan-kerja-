<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('jobseekers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
        
            // Data tambahan user
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->string('resume')->nullable();
        
            $table->timestamps();
        });
        
    }
    public function down(): void
    {
        Schema::dropIfExists('jobseekers');
    }
};
