<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'active_salon_id')) {
                $table->foreignId('active_salon_id')->nullable()->after('id')
                    ->constrained('salons')->nullOnDelete();
            }
            if (!Schema::hasColumn('users', 'is_superadmin')) {
                $table->boolean('is_superadmin')->default(false)->after('password');
            }
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            if (Schema::hasColumn('users', 'active_salon_id')) {
                $table->dropConstrainedForeignId('active_salon_id');
            }
            if (Schema::hasColumn('users', 'is_superadmin')) {
                $table->dropColumn('is_superadmin');
            }
        });
    }
};
