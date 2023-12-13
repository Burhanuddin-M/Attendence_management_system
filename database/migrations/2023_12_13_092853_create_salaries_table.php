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
        Schema::create('salaries', function (Blueprint $table) {
            $table->id('salary_id'); // Salary id auto increment
            $table->unsignedBigInteger('emp_id'); // Defining the foreign key from the employee
        
            $table->decimal('allowance_per_day',10,2)->default(00.0); // Allowance per_day
            $table->decimal('deduction_per_day',10,2)->default(00.0); // Deduction per day
        
            $table->foreign('emp_id')->references('emp_id')->on('employees')->onDelete('cascade');

        
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salaries');
    }
};
