<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('salon_id')->constrained()->cascadeOnDelete();
            $table->foreignId('staff_id')->constrained()->cascadeOnDelete();
            
            $table->string('status')->default('confirmed'); // confirmed, cancelled, etc.
            
            $table->dateTime('start_at');
            $table->dateTime('end_at');
            
            $table->timestamps();
            
            $table->index(['salon_id', 'staff_id']);
            $table->index(['salon_id', 'start_at']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
