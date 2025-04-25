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
        Schema::create('rawmaterial', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->dateTime('delivery_time');
            $table->string('material_name',128);
            $table->string('category',16);
            $table->integer('material_quantity')->default(0);
            $table->string('description',256);
            $table->string('material_type',32);
            $table->decimal('material_price',12,2);
            $table->dateTime('purchase_date',);
            $table->string('supplier_name',128);
            $table->string('supplier_address',256);
            $table->string('buyer_name',64);
            $table->string('buyer_mob_no',12);
            $table->string('billing_id',32)->nullable();
            $table->string('gst_no',32)->nullable();
            $table->string('invoice_no')->nullable();
            $table->string('pan_no',10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rawmaterial');
    }
};
