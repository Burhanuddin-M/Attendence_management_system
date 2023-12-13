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
        Schema::create('attendences', function (Blueprint $table) {
            $table->id('attendence_id'); //Attendence Id Increment
            $table->unsignedBigInteger('emp_id'); //Foreign key of  employee_id from the employee table
            $table->date('Date');  //Date of the Attendence
            $table->boolean('is_Present')->default(0);  //To mark the attendence of the Employee
        
            $table->foreign('emp_id')->references('emp_id')->on('employees')->onDelete('cascade'); 
        
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendences');
    }
};
