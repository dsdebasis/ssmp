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
        Schema::create('consumers', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('fullname',32);

            $table->enum('gender', ['male', 'female'])->default('male');
          
            $table->enum('customer_type', ['consumers']);
           
            
            $table->integer('mob_no',12);
            $table->string('state',16);
            $table->integer('postcode',6);
            $table->string('city',16);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consumers');
    }
};
