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
            $table->id()->autoIncrement();
            $table->string('product_name',128);
            $table->string('category',16);
            $table->decimal('mrp',10,2);
            $table->decimal('net_gst',10,2);
            $table->decimal('cgst',10,2);
            $table->decimal('sgst',10,2);
            $table->string('hsn_code',16);
            $table->string('description',256);
          
            $table->string('supplier',32);
            $table->string('image',256)->nullable();
           
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
