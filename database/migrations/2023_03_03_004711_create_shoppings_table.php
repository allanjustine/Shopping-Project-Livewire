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
        Schema::create('shoppings', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->string('address');
            $table->string('mobile_number');
            $table->string('product_name');
            $table->string('price');
            $table->string('quantity');
            $table->string('status');
            $table->string('product_stock');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shoppings');
    }
};
