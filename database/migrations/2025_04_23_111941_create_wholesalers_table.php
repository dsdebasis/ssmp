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
        Schema::create('wholesalers', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('fullname',64);
            $table->enum('gender',['male','female']);
            $table->integer('age',2);
            $table->enum('customer_type',['wholesalers']);
            $table->string('gst_no')->nullable();
            $table->string('address',128);

            $table->string('state',16);
            $table->integer('postcode',6);
            $table->string('business_name',32);
            $table->integer('adharcard_no',16);
            $table->string('city',32);
            $table->string('profile_img')->nullable();
             
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wholesalers');
    }
};
