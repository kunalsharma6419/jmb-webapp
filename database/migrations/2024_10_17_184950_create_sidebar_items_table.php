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
        Schema::create('sidebar_items', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('menu_item'); // Name of the menu item
            $table->string('url'); // URL of the menu item
            $table->string('icon')->nullable(); // Icon class for the menu item
            $table->unsignedBigInteger('parent_id')->nullable(); // Self-referencing for nested items
            $table->foreignId('permission_id')->nullable()->constrained()->onDelete('cascade'); // Foreign key to permissions table
            $table->integer('order')->default(0); // Order number for sorting menu items
            $table->timestamps(); // Created and updated timestamps
            $table->softDeletes(); // Soft delete for the sidebar item
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sidebar_items');
    }
};
