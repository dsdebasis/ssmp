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
        Schema::create('distributers', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('fullname',50);
            
            $table->enum('gender',['male','female']);
            $table->integer('age')->default(0);
            $table->enum('customer_type',['distributers']);
            $table->string('gst_no')->nullable();
            $table->string('address',128);

            $table->string('state',16);
            $table->string('postcode',6);
            $table->string('business_name',128);
            $table->string('adharcard_no',16);
            $table->string('city',16);
            $table->string('profile_img',256)->nullable();
             
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('distributers');
    }
};
