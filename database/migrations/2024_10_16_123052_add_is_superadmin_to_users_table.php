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
            // Adding the 'is_superadmin' column
            $table->boolean('is_superadmin')
                  ->default(0) // Default is not a superadmin
                  ->nullable()
                  ->after('profile_status'); // Place it after 'profile_status'
                  $table->boolean('is_admin')->default(0)->nullable()->after('is_superadmin');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Dropping the 'is_superadmin' column during rollback
            $table->dropColumn('is_superadmin');
           
        });
    }
};
