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
        Schema::table('task_users', function (Blueprint $table) {
            $table->date('start_date')->nullable()->after('user_id');
            $table->date('end_date')->nullable()->after('start_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('task_users', function (Blueprint $table) {
            $table->dropColumn(['start_date', 'end_date']);
        });
    }
};