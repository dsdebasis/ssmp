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
        Schema::create('retailers', function (Blueprint $table) {
            $table->id();
            $table->string('fullname',32);
            
            $table->enum('gender',['male','female']);
            $table->integer('age',2);
            $table->enum('customer_type',['retailers']);
            $table->string('gst_no')->nullable();
            $table->string('address',128);
             $table->integer('mob_no',12);
            $table->string('state',16);
            $table->integer('postcode',6);
            $table->string('business_name',128);
            $table->integer('adhar_no',16);
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
        Schema::dropIfExists('retailers');
    }
};
