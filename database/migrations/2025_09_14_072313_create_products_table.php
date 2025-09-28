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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_id')->nullable();
            $table->string('title')->nullable();
            $table->decimal('price',8,2)->default('0.00');
            $table->string('description')->nullable();
            $table->integer('category_id')->nullable();
            $table->string('image')->nullable();
            $table->json('rating')->nullable();
            $table->integer('stock_quantity')->nullable();
            $table->boolean('status')->default(1)->nullable();
            $table->json('additional_data')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
