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
        Schema::table('users', function (Blueprint $table) {
            // Adding the enum column for profile status
            $table->enum('profile_status', ['activated', 'deactivated', 'hold'])
                  ->default('activated')
                  ->after('password'); // Adjust the position as needed
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Dropping the enum column during rollback
            $table->dropColumn('profile_status');
        });
    }
};
