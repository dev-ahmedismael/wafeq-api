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
        Schema::create('quotes_and_proformas', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('index');
            $table->string('status')->nullable();
            $table->string('number')->nullable();
            $table->date('date')->nullable();
            $table->string('customer')->nullable();
            $table->string('currency')->nullable();
            $table->string('quote_amount')->nullable();
            $table->string('item')->nullable();
            $table->string('line_item_description')->nullable();
            $table->string('qty')->nullable();
            $table->string('price')->nullable();
            $table->string('tax_rate')->nullable();
            $table->string('discount')->nullable();
            $table->string('line_amount')->nullable();
            $table->string('reference')->nullable();
            $table->string('project')->nullable();
            $table->string('notes')->nullable();
            $table->string('quote_id')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotes_and_proformas');
    }
};
