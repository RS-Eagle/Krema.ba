<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('staff_schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('salon_id')->constrained()->cascadeOnDelete();
            $table->foreignId('staff_id')->constrained()->cascadeOnDelete();
            
            $table->integer('weekday')->nullable(); // 0=Sunday, 6=Saturday
            $table->date('date')->nullable();       // Specific date override
            
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            
            $table->boolean('is_available')->default(true);
            
            $table->timestamps();
            
            $table->index(['salon_id', 'staff_id']);
            $table->index(['salon_id', 'date']);
            $table->index(['salon_id', 'weekday']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('staff_schedules');
    }
};
