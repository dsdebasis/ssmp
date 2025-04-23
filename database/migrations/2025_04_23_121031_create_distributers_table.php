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
            $table->id();
            $table->string('fullname');
            
            $table->enum('gender',['male','female'])->default('male');
            $table->date('dob');
            $table->enum('customer_type',['distributers']);
            $table->string('gst_no');
            $table->string('address');

            $table->string('state');
            $table->integer('postcode');
            $table->string('business_name');
            $table->integer('adharcard_no');
            $table->string('city');
            $table->string('profile_img');
             
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
