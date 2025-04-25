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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('product_name',64);
            $table->string('description',256);
            $table->string('category',16);
            $table->integer('net_item')->default(0);
            $table->integer('net_package')->default(0);
            $table->decimal('mrp');
            $table->decimal('price_per-unit');
            $table->string('invoice_no');
            $table->string('gst_no');
            $table->decimal('total_gst');
            $table->decimal('cgst');
            $table->decimal('sgst');
            $table->decimal('product_weight');
            $table->string('purchase_date');
            $table->string('supplier_name');
            $table->string('buyer_type');
            $table->string('buyer_name');
            $table->string('buyer_address');
            $table->string('buyer_contact_no');
          

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
