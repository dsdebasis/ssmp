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
        Schema::create('staff', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('fullname',50);
            $table->integer('age');
            $table->date('dob');
            $table->enum('gender',['male','female']);
            $table->decimal('salary',6,2)->nullable();
            $table->string('address',256);
            $table->string('state',16);
            $table->string('district',32);
            $table->integer('postcode',6);
            $table->integer('mob_no',10);
            $table->integer('adhar_card_no',16);
            $table->string('father_name',32);
            $table->string('mother_name',32);
            $table->date('joining_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
