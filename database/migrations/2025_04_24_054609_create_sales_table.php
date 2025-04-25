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
        Schema::create('sales', function (Blueprint $table) {
            $table->id()->autoIncrement();
            // $table->foreign('seller_id')->references('id')->on('salespersons');
            $table->dateTime('sale_date')->default(now());
            // $table->foreign('product_id')->references('id')->on('products');
            $table->string('customer_name');
            $table->string('customer_type');
            // $table->foreign('invoice_id')->references('id')->on('invoices');
           
            $table->string('product_quantity');
            $table->decimal('total_price',10,2);
            $table->string('delivery_address');
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
