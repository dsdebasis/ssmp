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
            $table->string('product_name');
            $table->string('category');
            $table->decimal('mrp',10,2);
            $table->decimal('net_gst',10,2);
            $table->decimal('cgst',10,2);
            $table->decimal('sgst',10,2);
            $table->string('hsn_code');
            $table->string('description');
            $table->string('weight');
            $table->string('supplier');
            $table->string('image');
           
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
