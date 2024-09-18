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
        Schema::create('inventory_items', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_active')->default(1);
            $table->string('name')->nullable();
            $table->string('code')->nullable();
            $table->string('measure_unit')->nullable();
            $table->string('qty')->nullable('');
            $table->string('description')->nullable();
            $table->float('selling_price')->nullable();
            $table->integer('revenue_account')->nullable();
            $table->integer('revenue_tax_rate')->nullable();
            $table->float('purchase_cost');
            $table->integer('expense_account');
            $table->integer('purchase_tax_rate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory_items');
    }
};
