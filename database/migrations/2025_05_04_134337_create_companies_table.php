<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('companies', function (Blueprint $table) { //untuk perusahaan
            $table->id();
            $table->string('company_name');
            $table->string('email')->unique();
            $table->string('password');
        
            // Data tambahan perusahaan
            $table->foreignId('admin_id')->nullable()->constrained('admins')->onDelete('set null');
            $table->string('phone')->nullable();
            $table->text('company_description')->nullable();
            $table->string('website')->nullable();
            $table->text('address')->nullable();
        
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
